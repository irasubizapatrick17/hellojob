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

use Excel;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;


class JobseekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $job_seeker=Job_seeker::select('job_seeker.*')
            ->where('user_id','=',$user_id)
            ->get();
        return view('jobseeker.view_my_cv')
            ->with('job_seeker',$job_seeker)
            ->with('user_id',$user_id);
    }


//    public function GetCv(Request $request)
//
//    {
//
//        $user_id = Auth::id();
//        $job_seeker=Job_seeker::select('job_seeker.*')
//            ->where('user_id','=',$user_id)
//            ->get();
//        return view('jobseeker.view_my_cv')
//            ->with('job_seeker',$job_seeker)
//            ->with('userid',$user_id);
//    }



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
        $job_seeker->bio                 =Input::get('bio');
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

    //All job seeker employer

        public function  job_seeker_company(Request $request)
    {
        $job_seeker         =Job_seeker::select('job_seeker.*','permission','function')
                            ->join('users','users.id','=','job_seeker.user_id')
                             ->where('users.function','=','Company' ,'AND','users.permission','=','jobseeker')
                            ->get();
        return view('users.all_job_seeker_company')
                             ->with('job_seeker',$job_seeker);
    }

    //    all job seeker individual

    public function  job_seeker_individual(Request $request)
    {
        $job_seeker         =Job_seeker::select('job_seeker.*')
                            ->join('users','users.id','=','job_seeker.user_id')
                             ->where('users.permission','=','jobseeker' ,'AND','users.function','=','Individual')
                             ->get();
        return view('users.all_job_seeker_individual')
                             ->with('job_seeker',$job_seeker);
    }


    //    All employer company
    public function  employer_individual(Request $request)
    {
        $job_seeker         =Job_seeker::select('job_seeker.*','permission','function')
                            ->join('users','users.id','=','job_seeker.user_id')
                            ->where('users.permission','=','employer' ,'AND' ,'users.function','=','Company')
                            ->get();
        return view('users.all_employer_individual')
                            ->with('job_seeker',$job_seeker);
    }


    // All employer individual
    public function  employer_company(Request $request)
    {
        $job_seeker         =Job_seeker::select('job_seeker.*')
                            ->join('users','users.id','=','job_seeker.user_id')
                            ->where('users.function','=','Company' ,'AND','users.permission','=','employer')
                            ->get();
        return view('users.all_employer_company')
                            ->with('job_seeker',$job_seeker);
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
        if ($request->file('profile')->isValid()) {

            $filename = $request->file('profile')->getClientOriginalName();

        }
        $user_id                            = Auth::id();
        $job_seeker                         = Job_seeker::find($id);
        $job_seeker->first_name             = $request->Input('first_name');
        $job_seeker->last_name              = $request->Input('last_name');
        $job_seeker->profile                = $filename;
        $job_seeker->email                  = $request->Input('email');
        $job_seeker->gender                 = $request->Input('gender');
        $job_seeker->dob                    = $request->Input('dob');
        $job_seeker->personal_status        = $request->Input('personal_status');
        $job_seeker->telephone              = $request->Input('telephone');
        $job_seeker->nationality            = $request->Input('nationality');
        $job_seeker->district               = $request->Input('district');
        $job_seeker->academic               = $request->Input('academic');
        $job_seeker->subject                = $request->Input('subject');
        $job_seeker->start_date             = $request->Input('start_date');
        $job_seeker->end_date               = $request->Input('end_date');
        $job_seeker->position               = $request->Input('position');
        $job_seeker->institution            = $request->Input('institution');
        $job_seeker->personal_country       = $request->Input('personal_country');
        $job_seeker->personal_location      = $request->Input('personal_location');
        $job_seeker->duration               = $request->Input('duration');
        $job_seeker->user_id                 = $user_id;

        $request->file('profile')->move(public_path() . '/jobseekers', $filename);

        $job_seeker->save();

        Session::flash('updated', 'CV  Updated successfully');

        return redirect("/my_cv");

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
