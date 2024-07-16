<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Guests;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'max:20'],
            'passport_number' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\guests
     */
    protected function create(array $data)
    {
        // Create the guest
        Guests::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'passport_number' => $data['passport_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Create the user
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'user_type' => 'guest', // Add user_type as guest
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'gender' => null, // Set to null if you want to leave it empty
            'last_login_on' => null,
            'login_try_attempts' => 0,
            'login_try_attempt_date' => null,
            'status' => 'active', // or any default value you want
            'username' => null, // Set to null if you want to leave it empty
        ]);
    }
}
