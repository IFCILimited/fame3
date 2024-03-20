<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

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

    // protected $maxAttempts = 1;
    // protected $decayMinutes = 1;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        $identity = request()->get('identity');
        $fieldname = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'pan';
        request()->merge([$fieldname => $identity]);
        return $fieldname;
    }

    protected function validateLogin(Request $request)
    {
        dd($request);
        $key = hex2bin("0123456789abcdef0123456789abcdef");
        $iv = hex2bin("abcdef9876543210abcdef9876543210");

        $decryptedId = openssl_decrypt($request->identity, 'AES-128-CBC', $key, OPENSSL_ZERO_PADDING, $iv);
        $decryptedId = trim($decryptedId);
        $decryptedPwd = openssl_decrypt($request->password, 'AES-128-CBC', $key, OPENSSL_ZERO_PADDING, $iv);
        $decryptedPwd = trim($decryptedPwd);

        $request->merge([
            'identity' => $decryptedId,
            'password' => $decryptedPwd,
        ]);
        //  dd($request);
        if ($this->username() == 'pan') {
            $validator = Validator::make($request->all(), [
                $this->username() => [
                    'required',
                    'size:10',
                    function ($attribute, $value, $fail) {
                        $user = User::where('pan', $value)->first();
                        if ($user && $user->isapproved == 'Y') {
                            return true;
                        }

                        return $fail('These credentials do not match our records.');
                    },
                ],
                'password' => 'required|string',
            ]);

            $validator->validate();
        } elseif ($this->username() == 'email') {
            $validator = Validator::make($request->all(), [
                $this->username() => [
                    'required',
                    'email',
                    function ($attribute, $value, $fail) {
                        $user = User::where('email', $value)->first();
                        if ($user && $user->hasRole(['Admin', 'Admin-Ministry']) && $user->isapproved == 'Y') {
                            return true;
                        }

                        return $fail('These credentials do not match our records.');
                    },
                ],
                'password' => 'required|string',
            ]);

            $validator->validate();
        }
    }
    protected function authenticated($request)
    {
        // dd($request);
        // logout from other divece
        Auth::logoutOtherDevices($request->password);
        //for dashoard
        // auth()->user()->update(['isotpverified' => 0]);
        // if (Auth::user()->hasRole('Admin') or Auth::user()->hasRole('Admin-Ministry')) {
        //     return redirect()->route('admin.home');
        //     // return redirect()->route('admin.dashboard.dashboard');
        // }

        // return redirect()->route('home');
        return redirect()->route('test');
    }
}
