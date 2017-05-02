<?php

namespace hellojob\Http\Controllers;

use Illuminate\Http\Request;

use hellojob\Http\Requests;

use DB;

use Response;

use Session;

use Auth;

use Hash;

use hellojob\Company;

use Illuminate\Support\Facades\Input;


class CompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_id = Auth::id();
        $company =Company::select('company.*')
            ->where('user_id','=',$user_id)
            ->get();
        return view('company.company_profile')
            ->with('company',$company)
            ->with('user_id',$user_id);
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
        if ($request->file('company_profile')->isValid()) {

            $filename =$request->file('company_profile')->getClientOriginalName();

        }


        $user_id                            = Auth::id();
        $company                         =new Company;
        $company->company_name           =Input::get('company_name');
        $company->company_bio            =Input::get('company_bio');
        $company->company_profile        =$filename;
        $company->email                  =Input::get('email');
        $company->telephone              =Input::get('telephone');
        $company->working_area           =Input::get('working_area');
        $company->location               =Input::get('location');
        $company->user_id                =$user_id;

        $request->file('company_profile')->move(public_path().'/company',$filename);

        $company->save();

        Session::flash('message', 'Company profile  Created successfully');

        return redirect("/company_profile");
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
        if ($request->file('company_profile')->isValid()) {

            $filename = $request->file('company_profile')->getClientOriginalName();

        }
        $user_id                           = Auth::id();
        $company                          = Company::find($id);
        $company->company_profile         = $filename;
        $company->company_name            = $request->Input('company_name');
        $company->company_bio             = $request->Input('company_bio');
        $company->telephone               = $request->Input('telephone');
        $company->working_area            = $request->Input('working_area');
        $company->location                = $request->Input('location');
        $company->email                   = $request->Input('email');
        $company->user_id                 = $user_id;

        $request->file('company_profile')->move(public_path() . '/company', $filename);

        $company->save();

        Session::flash('updated', 'Company Profile  Updated successfully');

        return redirect("/company_profile");
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
