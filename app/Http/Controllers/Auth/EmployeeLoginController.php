<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.employee-login');
    }
    protected function guard(){
        return Auth::guard('employee');
    }

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:employee')->except('logout');
    }

}
