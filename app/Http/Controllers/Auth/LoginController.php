<?php

namespace hellojob\Http\Controllers\Auth;

use hellojob\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use hellojob\User;
use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   protected $redirectTo = '/home';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    // End user session

    use AuthenticatesUsers{

        logout as performLogout;

    }

    public function logout(Request $request)
    {

        $this->performLogout($request);
        return redirect()->route('login');

    }

    // Login redirection according to credentials


    public function login(Request $request)
    {
        // dd($request->all());

        if (Auth::attempt([

            'email' => $request ->email,
            'password' => $request->password,
            'status' => 'active'

        ]))
        {

            $user = User::where('email',$request->email)->first();

            if ($user->is_admin())
            {

                return redirect()->route('admin_dashboard');
            }
            elseif($user->is_employer())
            {

                return redirect()->route('employer_dashboard');
            }

            elseif ($user->is_jobseeker())
            {

                return redirect()->route('jobseeker_dashboard');

            }

            return redirect()->route('login');
        }
        return redirect()->back();
    }
}
