<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
  protected $redirectTo = RouteServiceProvider::HOME;

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
      'companyname' => ['required', 'string', 'max:255'],
      'country' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'fullname' => ['required', 'string', 'max:255'],
      'mtnphonenumber' => ['required', 'string', 'max:255'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
      'state' => ['required', 'string', 'max:255'],
      'username' => ['required', 'string', 'max:255'],
      'clientid' => ['required', 'string', 'max:255'],
      'documenturl' => ['required', 'string', 'max:255'],
      'termsandcondition' => ['required', 'string', 'max:255'],
      'clientidmoov' => ['required', 'string', 'max:255'],
      'merchantnumber' => ['required', 'string', 'max:255'],
    ]);
  }

  /**
  * Create a new user instance after a valid registration.
  *
  * @param  array  $data
  * @return \App\User
  */
  protected function create(array $data)
  {
    return User::create([
      'companyname' => $data['companyname'],
      'country' => $data['country'],
      'email' => $data['email'],
      'fullname' => $data['fullname'],
      'mtnphonenumber' => $data['mtnphonenumber'],
      'password' => Hash::make($data['password']),
      'state' => $data['state'],
      'username' => $data['username'],
      'clientid' => $data['clientid'],
      'documenturl' => $data['documenturl'],
      'termsandcondition' => $data['termsandcondition'],
      'clientidmoov' => $data['clientidmoov'],
      'merchantnumber' => $data['merchantnumber'],
    ]);
  }
}
