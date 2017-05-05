<?php

namespace hellojob\Http\Controllers;

use Illuminate\Http\Request;

use hellojob\Http\Requests;

use hellojob\Job_seeker;

use DB;

use hellojob\User;

use Response;

use Session;

use Auth;

use Hash;

use hellojob\Record;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_seeker  =Record::all();
        return view('users.records')
                    ->with('job_seeker',$job_seeker);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function hire(Request $request)
    {
        $job_seeker =Job_seeker::all();
        return view('users.records')
                ->with('job_seeker',$job_seeker);
    }

    public function pending(Request $request)
    {
        $user = $request->get('id');
        DB::table('records')
            ->where('id', $user)
            ->update(['status' => 'pending']);
    }

    public function activate(Request $request)
    {
        $user = $request->get('id');
        DB::table('records')
            ->where('id', $user)
            ->update(['status' => 'active']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user_id                            = Auth::id();
        $record                         =new Record;
        $record->job_seeker_id          =Input::get('job_seeker_id');
        $record->status                 =Input::get('status');
        $record->user_id                =$user_id;

        $record->save();

        Session::flash('message', 'Hire request successful please wait to confirm your request');

        return redirect("/records_for_hire");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
