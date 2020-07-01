<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LogInRequest;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
//    protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '';
    protected function redirectTo(){
        if(auth::user()['type'] == 'admin'){
            return redirect()->route('home');
        }
        if(auth::user()['type'] == 'teacher'){
            return redirect('/');
        }
        if(auth::user()['type'] == 'student'){
            return redirect()->route('studentHome');
        }
    }



    public function login(LogInRequest $request)
    {

        $user = User::where('email',$request->email)->first();

        $email = $user['email'];
        $password = $user['password'];
        $requestPassword=$request->password;
        if (Hash::check($requestPassword,$password) && $email)
        {
            if ($user['approved_at']!=""){
                Auth::login($user);
                return $this->redirectTo();
            }
            else{
                return redirect()->back()->with('message','your email needed to approve')->withInput(['email'=>$email]);

            }

        }
        else{
            return redirect()->back()->with('message','Invalid Email or Password')->withInput(['email'=>$email]);
        }
    }





    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
