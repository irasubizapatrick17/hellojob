<?php

namespace hellojob\Http\Controllers;

use Illuminate\Http\Request;

use hellojob\Http\Requests;

use hellojob\Job_seeker;

use DB;

use Response;

use Session;

use Auth;

use Hash;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class AddProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobseeker.my_cv');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('profile')->isValid()) {

            $filename =$request->file('profile')->getClientOriginalName();

        }


        $user_id                            = Auth::id();
        $job_seeker                         =new Job_seeker;
        $job_seeker->first_name             =Input::get('first_name');
        $job_seeker->last_name              =Input::get('last_name');
        $job_seeker->profile                =$filename;
        $job_seeker->email                  =Input::get('email');
        $job_seeker->gender                 =Input::get('gender');
        $job_seeker->dob                    =Input::get('dob');
        $job_seeker->personal_status        =Input::get('personal_status');
        $job_seeker->telephone              =Input::get('telephone');
        $job_seeker->nationality            =Input::get('nationality');
        $job_seeker->district               =Input::get('district');
        $job_seeker->academic               =Input::get('academic');
        $job_seeker->subject                =Input::get('subject');
        $job_seeker->start_date             =Input::get('start_date');
        $job_seeker->end_date               =Input::get('end_date');
        $job_seeker->position               =Input::get('position');
        $job_seeker->institution            =Input::get('institution');
        $job_seeker->personal_country       =Input::get('personal_country');
        $job_seeker->personal_location      =Input::get('personal_location');
        $job_seeker->duration               =Input::get('duration');
        $job_seeker->user_id                =$user_id;

        $request->file('profile')->move(public_path().'/jobseekers',$filename);

        $job_seeker->save();

        Session::flash('message', 'CV Created successfully');

        return redirect("/my_cv");
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
