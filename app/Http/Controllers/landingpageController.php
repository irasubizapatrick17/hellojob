<?php

namespace hellojob\Http\Controllers;

use Illuminate\Http\Request;

use hellojob\Http\Requests;

use hellojob\Job_seeker;

use hellojob\Company;

use DB;

use Response;

use Session;

use Auth;

use Hash;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class landingpageController extends Controller
{
    public function index()
    {
        $job_seeker        =Job_seeker::all();
        $company           =Company::all();
        return view('welcome')
            ->with('job_seeker',$job_seeker)
            ->with('company',$company);

    }

    public function  search_job_seeker(Request $request)
    {
        $job_seeker        =Job_seeker::all();
        return view('users.explore')
            ->with('job_seeker',$job_seeker);
    }


    public function  view(Request $request ,$id)
    {

        $job_seeker =Job_seeker::select('job_seeker.*','first_name')
                ->where('job_seeker.id','=',$id)
                ->get();
        return view ('viewprofile')
            ->with('job_seeker',$job_seeker);

    }

}
