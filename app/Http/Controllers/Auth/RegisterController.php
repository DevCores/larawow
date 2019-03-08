<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\News;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/login';

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
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'g-recaptcha-response' => 'required|captcha',
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

        $createUser = DB::connection('auth');
        $username = strtoupper($data['name']);
        $pass = $data['password'];
        $pass = strtoupper(sha1(strtoupper($username).':'.strtoupper($pass)));
        $email = $data['email'];
        $expansion = 2;
        $createUser->insert('insert into account (username, sha_pass_hash, email, expansion, last_login) values (?, ?, ?, ?, ?)', [$username, $pass , $email, $expansion, '2019-01-18 20:37:49']);
        return User::create([
            'name' => strtoupper($data['name']),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        


    }
}
