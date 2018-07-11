<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller Admin
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest:admin','guest:web'])->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    private function validateLogin(Request $request){
        $this->validate($request,[
            'email' => 'email|required',
            'password' => 'required'
        ]);
    }

    public function login(Request $request){

        $this->validateLogin($request);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        //Attempt to the log user in
        if(Auth::guard('admin')->attempt($credential,$request->member)){
            return redirect()->intended(route('admin'));
        }
        return redirect()->back->withInput($request->only('email','remember'));
    }

    public function logout(Request $request)
    {
        $this->guard('admin')->logout();
        return redirect('/');
    }
}
