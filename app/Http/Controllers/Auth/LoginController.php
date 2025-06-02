<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * User login flow
     *
     * @return void
     */
    public function showUserLoginForm()
    {
        return view('auth.login', ['url' => route('frontend.login-view'), 'title'=>'Admin']);
    }

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('web')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        \Session::flush();
        \Auth::logout();
        return redirect()->intended('/');
    }

    /**
     * Admin login flow
     *
     * @return void
     */
    public function showAdminLoginForm()
    {
        return view('auth.login_admin', ['url' => route('admin.login-view'), 'title'=>'Admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('admin')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/admin');
        }

        return back()->withInput($request->only('email', 'remember'));
    }
}
