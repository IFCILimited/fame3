<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        //  dd($data,$data['mobile']);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
            'username' => $this->generateUsername($data['name'],  $data['mobile']),
            'isactive' => 'Y',
            'isotpverified' => 0,
            'isapproved' => 'N',
        ]);
    }

    private function generateUsername($name, $mobile)
    {
        $username = substr($name, 0, 4); // Get first 4 characters of name
        $username .= substr($mobile, -4); // Get last 4 digits of mobile

        // Check if the username already exists
        $count = User::where('username', $username)->count();
        
        // If the username already exists, append the primary key to make it unique
        if ($count > 0) {
            $username .= '_' . (User::max('id') + 1); // Append the primary key
        }

        return $username;
    }

    protected function registered(Request $request, $user)
    {
        $user->assignRole('OEM');
        return redirect()->route('oem.index')->with('success', 'Registration successful. Please login.');
        // return redirect()->route('test');

        // try {
        //     Mail::to($user->email)
        //         ->cc('bdpli@ifciltd.com')
        //         ->send(new NewRegistration($user));
        // } catch (\Exception $e) {
        //     return redirect()->route('/verifyuser');
        // }
    }
}
