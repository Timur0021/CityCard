<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Client\Traits\LoginBuyer;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class LoginAuthController extends Controller
{
    use LoginBuyer;
    protected $redirectTo = RouteServiceProvider::CLIENT;

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
