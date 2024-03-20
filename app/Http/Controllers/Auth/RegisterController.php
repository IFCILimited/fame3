<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\DocumentUpload;
use App\OEMType;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PreRegisterRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use Log;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
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
        //   dd($data);
        return Validator::make($data, (new PreRegisterRequest())->rules());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data,$data['Name']);
    
            
            $oemType = OemType::where("type", $data['oem_type'])->first();
            // dd($oemType);

            // $registrationFile = $data['Registration_file'];
           
            // $fileName = $registrationFile->getClientOriginalName();
            // $mime = $registrationFile->getMimeType();
            // $fileSize = $registrationFile->getSize();
            // $fileContent = file_get_contents($registrationFile->getRealPath());
            
            // // dd($fileSize);
            // $documentUpload = new DocumentUpload();
            // $documentUpload->file_name = $fileName;
            // $documentUpload->mime = $mime;
            // $documentUpload->file_size = $fileSize;
            // $documentUpload->uploaded_file = $fileContent;
            // $documentUpload->save();
            // dd( $documentUpload);

            return User::create([
                'name' => $data['Name'],
                'email' => $data['Mail'],
                'mobile'=>$data['Mobile'],
                'password' => Null,
                // 'password' => Hash::make($data['password']),
                'username' => $this->generateUsername($data['Name'], $data['Mobile']),
                'isactive' => 'Y',
                'isotpverified' => 0,
                'isapproved' => 'N',
                'type' => $oemType->id,
                'address' => $data['Address'],
                'pincode' => $data['Pincode'],
                'state' => $data['State'],
                'district' => $data['District'],
                'city' => $data['City'],
                'fax' => $data['Fax'],
                'registration_no' => $data['Registration'],
                // 'registration_certificate_upload_id' => $documentUpload->id
                'registration_certificate_upload_id' => Null
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
        return redirect()->route('logout')

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
