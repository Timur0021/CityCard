<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Client\Traits\RegisterBuyer;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterAuthController extends Controller
{
    use RegisterBuyer;

    protected $redirectTo = RouteServiceProvider::CLIENT;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'number' => ['required', 'string', 'max:255', 'unique:clients'],
            'password' => ['required', 'string', 'min:2'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return Client::create([
            'number' => $data['number'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
