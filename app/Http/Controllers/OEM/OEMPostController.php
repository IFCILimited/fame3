<?php

namespace App\Http\Controllers\OEM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\ManufacturingInformation;
use App\ManufacturingEVPlantDetail;
use App\AuthorizedPersonDetail;
use App\BankDetail;
use App\OtherDetail;
use App\RegisterOfficeDetail;
use App\DocumentUpload;
use DB;

class OEMPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('auth.post_register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->id=4;//for oem registration id is always 4
        $request->username='Test8773';
        // dd($request, $request->password,Hash::make($request->password));
        try {

            DB::transaction(function () use ($request) {

                $user = User::Where('id', $request->id)->where('username', $request->username)->first();
                // dd($user);
                // $user->name_of_oem = $request->name_of_oem;
                // $user->username = $request->username;
                $user->password = Hash::make($request->password);
                // $user->password_confirmation = bcrypt($request->password_confirmation';
                // $user->company_registration_no = $request->company_registration_no;

                if ($request->hasFile('company_registration_file')) {
                $manu_regi_fileName = $request->company_registration_file->getClientOriginalName();
                $manu_regi_mime = $request->company_registration_file->getMimeType();
                $manu_regi_fileSize = $request->company_registration_file->getSize();
                $manu_regi_fileContent = file_get_contents($request->company_registration_file->getRealPath());

                $Manu_regi_doc = new DocumentUpload();
                $Manu_regi_doc->file_name = $manu_regi_fileName;
                $Manu_regi_doc->mime = $manu_regi_mime;
                $Manu_regi_doc->file_size = $manu_regi_fileSize;
                $Manu_regi_doc->uploaded_file = $manu_regi_fileContent;
                $Manu_regi_doc->save();
                }

                if ($request->hasFile('gstin_registration_file')) {
                $manu_gst_fileName = $request->gstin_registration_file->getClientOriginalName();
                $manu_gst_mime = $request->gstin_registration_file->getMimeType();
                $manu_gst_fileSize = $request->gstin_registration_file->getSize();
                $manu_gst_fileContent = file_get_contents($request->gstin_registration_file->getRealPath());

                $Manu_gst_doc = new DocumentUpload();
                $Manu_gst_doc->file_name = $manu_gst_fileName;
                $Manu_gst_doc->mime = $manu_gst_mime;
                $Manu_gst_doc->file_size = $manu_gst_fileSize;
                $Manu_gst_doc->uploaded_file = $manu_gst_fileContent;
                $Manu_gst_doc->save();
                }

                if ($request->hasFile('oem_pan_file')) {
                $manu_pan_fileName = $request->oem_pan_file->getClientOriginalName();
                $manu_pan_mime = $request->oem_pan_file->getMimeType();
                $manu_pan_fileSize = $request->oem_pan_file->getSize();
                $manu_pan_fileContent = file_get_contents($request->oem_pan_file->getRealPath());

                $Manu_pan_doc = new DocumentUpload();
                $Manu_pan_doc->file_name = $manu_pan_fileName;
                $Manu_pan_doc->mime = $manu_pan_mime;
                $Manu_pan_doc->file_size = $manu_pan_fileSize;
                $Manu_pan_doc->uploaded_file = $manu_pan_fileContent;
                $Manu_pan_doc->save();
                }
                if ($request->hasFile('r_and_d_facilities_file')) {
                $manu_rnd_fileName = $request->r_and_d_facilities_file->getClientOriginalName();
                $manu_rnd_mime = $request->r_and_d_facilities_file->getMimeType();
                $manu_rnd_fileSize = $request->r_and_d_facilities_file->getSize();
                $manu_rnd_fileContent = file_get_contents($request->r_and_d_facilities_file->getRealPath());

                $Manu_rnd_doc = new DocumentUpload();
                $Manu_rnd_doc->file_name = $manu_rnd_fileName;
                $Manu_rnd_doc->mime = $manu_rnd_mime;
                $Manu_rnd_doc->file_size = $manu_rnd_fileSize;
                $Manu_rnd_doc->uploaded_file = $manu_rnd_fileContent;
                $Manu_rnd_doc->save();
                }

                

                $manufacturing = new ManufacturingInformation;
                $manufacturing->user_id = $user->id;
                $manufacturing->company_registration_no = $request->company_registration_no;
                $manufacturing->registration_certificate_upload_id = isset($Manu_regi_doc) ? $Manu_regi_doc->id : null;
                $manufacturing->gstin_no = $request->gstin_no;
                $manufacturing->gstin_registration_upload_id = isset($Manu_gst_doc) ? $Manu_gst_doc->id : null;
                $manufacturing->oem_pan = $request->oem_pan;
                $manufacturing->oem_pan_upload_id = isset($Manu_pan_doc) ? $Manu_pan_doc->id : null;
                $manufacturing->r_and_d_facilities_upload_id = isset($Manu_rnd_doc) ? $Manu_rnd_doc->id : null;
                $manufacturing->annual_turnover = $request->annual_turnover;

                $register = new RegisterOfficeDetail;
                $register->user_id = $user->id;
                $register->address = $request->registered_office_address;
                $register->city = $request->registered_office_city;
                $register->landmark = $request->registered_office_landmark;
                $register->pincode = $request->registered_office_pincode;
                $register->state = $request->registered_office_state;
                $register->landline_no = $request->registered_office_landline_no;
                $register->district = $request->registered_office_district;
                $register->fax_no = $request->registered_office_fax_no;
                $register->email = $request->registered_office_email;


                $manufacturing_plant = new ManufacturingEVPlantDetail;
                $manufacturing_plant->user_id = $user->id;
                $manufacturing_plant->plant_name = $request->plant_name_1;
                $manufacturing_plant->address = $request->plant_address_1;
                $manufacturing_plant->email = $request->plant_email_1;
                $manufacturing_plant->state = $request->plant_state_1;
                $manufacturing_plant->district = $request->plant_district_1;
                $manufacturing_plant->city = $request->plant_city_1;
                $manufacturing_plant->pincode = $request->plant_pincode_1;
                $manufacturing_plant->landline_no = $request->plant_landline_1;


                $authorized = new AuthorizedPersonDetail;
                $authorized->user_id = $user->id;
                $authorized->name = $request->authorized_person_name;
                $authorized->city = $request->authorized_person_city;
                $authorized->address = $request->authorized_person_address;
                $authorized->landmark = $request->authorized_person_landmark;
                $authorized->pincode = $request->authorized_person_pincode;
                $authorized->mobile = $request->authorized_person_mobile;
                $authorized->district = $request->authorized_person_district;
                $authorized->state = $request->authorized_person_state;
                $authorized->fax_no = $request->authorized_person_fax;
                $authorized->email = $request->authorized_person_email;

                $bankdetail = new BankDetail;
                $bankdetail->user_id = $user->id;
                $bankdetail->ifsc_code = $request->ifsc_code;
                $bankdetail->account_holder_name = $request->account_holder_name;
                $bankdetail->bank_name = $request->bank_name;
                $bankdetail->branch_name = $request->branch_name;
                $bankdetail->address = $request->bank_address;
                $bankdetail->city = $request->branch_city;
                $bankdetail->account_no = $request->account_number;
                $bankdetail->micr_code = $request->micr_code;
                $bankdetail->account_type = $request->account_type;
                $bankdetail->pincode = $request->branch_pincode;
                $bankdetail->state = $request->branch_state;
                $bankdetail->district = $request->branch_district;

                if ($request->hasFile('dealer_list_file')) {
                $dealer_list_fileName = $request->dealer_list_file->getClientOriginalName();
                $dealer_list_mime = $request->dealer_list_file->getMimeType();
                $dealer_list_fileSize = $request->dealer_list_file->getSize();
                $dealer_list_fileContent = file_get_contents($request->dealer_list_file->getRealPath());

                $dealer_list_doc = new DocumentUpload();
                $dealer_list_doc->file_name = $dealer_list_fileName;
                $dealer_list_doc->mime = $dealer_list_mime;
                $dealer_list_doc->file_size = $dealer_list_fileSize;
                $dealer_list_doc->uploaded_file = $dealer_list_fileContent;
                $dealer_list_doc->save();
                }


                $other = new OtherDetail;
                $other->user_id = $user->id;
                $other->dealer_mode = $request->dealer_mode;
                $other->dealer_no = $request->dealer_numbers;
                $other->no_of_dealers = $request->no_of_dealer;
                $other->dealer_state = $request->state_of_dealer_presence;
                $other->dealer_upload_id = isset($request->dealer_list_doc) ? $request->dealer_list_doc->id : 0;

                $user->save();
                $manufacturing->save();
                $register->save();
                $manufacturing_plant->save();
                $authorized->save();
                $bankdetail->save();
                $other->save();
            });
            return redirect()->route('admin.users.index')->withSuccess("User has been created successfully");
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
        #
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            //   dd($id);
              $user = User::Where('id', $id)->first();
            //   dd($user);
              return view('auth.post_register');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
