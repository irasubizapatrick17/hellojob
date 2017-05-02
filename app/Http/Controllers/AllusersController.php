<?php

namespace hellojob\Http\Controllers;

use Illuminate\Http\Request;

use hellojob\User;

use DB;

use Session;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;


class AllusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =User::all();
        return view ('users.allusers')
                    ->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function deactivate(Request $request)
    {
        $user = $request->get('id');
        DB::table('users')
            ->where('id', $user)
            ->update(['status' => 'deactive']);
    }

    public function activate(Request $request)
    {
        $user = $request->get('id');
        DB::table('users')
            ->where('id', $user)
            ->update(['status' => 'active']);
    }
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
        //
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
