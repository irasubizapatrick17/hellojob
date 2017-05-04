<?php

namespace hellojob\Http\Controllers;

use Illuminate\Http\Request;

use hellojob\Http\Requests;

use hellojob\Job_seeker;

use DB;

use Response;

use Session;

use Excel;

use Auth;

use Hash;

class AlljobseekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $job_seeker =Job_seeker::all();
        return view('users.all_jobseeker')
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

    public function import(Request $request)
    {
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count())
        {
            foreach ($data->toArray() as $key => $value) {
                $insert[] = [
                    'user_id'           => $value['user_id'],
                    'first_name'        => $value['first_name'],
                    'last_name'         => $value['last_name'],
                    'bio'               => $value['bio'],
                    'profile'           => $value['profile'],
                    'email'             => $value['email'],
                    'gender'            => $value['gender'],
                    'dob'               => $value['dob'],
                    'personal_status'   => $value['personal_status'],
                    'telephone'         => $value['telephone'],
                    'nationality'       => $value['nationality'],
                    'district'          => $value['district'],
                    'academic'          => $value['academic'],
                    'subject'           => $value['subject'],
                    'start_date'        => $value['start_date'],
                    'end_date'          => $value['end_date'],
                    'position'          => $value['position'],
                    'institution'       => $value['institution'],
                    'personal_country'  => $value['personal_country'],
                    'personal_location' => $value['personal_location'],
                    'duration'          => $value['duration']];

            }

            if(!empty($insert))
            {
                DB::table('job_seeker')->insert($insert);
                return back()->with('success','Insert Record successfully.');
            }
        }

        return back()->with('error','Please Check your file, Something is wrong there.');
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

        Session::flash('updated', 'jobseeker  Updated successfully');

        return redirect("/job_seeker_individual");
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
