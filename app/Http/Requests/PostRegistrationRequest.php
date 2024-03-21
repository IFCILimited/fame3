<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Assuming authorization is handled elsewhere
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // Registration Form
            // 'oem_name' => 'required|string|max:255',
            // 'oem_type' => 'required|string|in:Proprietorship,Partnership/LLP,Company',
            // 'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|max:15|confirmed',
            'password_confirmation' => 'required|string',

            // Manufacturing Information
            'company_registration_no' => 'required|string|max:255',
            'company_registration_certificate' => 'required|file',
            'gstin_no' => 'required|string|max:255',
            'gstin_registration_file' => 'required|file',
            'oem_pan' => 'required|string|max:255',
            'oem_pan_file' => 'required|file',
            'rd_facilities_file' => 'required|file',
            'annual_turnover' => 'required|numeric',

            // Registered Office Wizard
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'landmark' => 'required|string|max:255',
            'pincode' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'landline_no' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'fax_no' => 'required|string|max:255',
            'email' => 'required|email|max:255',

            // Manufacturing Plants Wizard (assuming it's dynamic)
            'plants.*.name' => 'required|string|max:255',
            'plants.*.address' => 'required|string|max:255',
            'plants.*.email' => 'required|email|max:255',
            'plants.*.state' => 'required|string|max:255',
            'plants.*.district' => 'required|string|max:255',
            'plants.*.city' => 'required|string|max:255',
            'plants.*.pincode' => 'required|string|max:255',
            'plants.*.landline_no' => 'required|string|max:255',

            // Authorized Person Details Wizard
            'authorized_person.name' => 'required|string|max:255',
            'authorized_person.city' => 'required|string|max:255',
            'authorized_person.address' => 'required|string|max:255',
            'authorized_person.landmark' => 'required|string|max:255',
            'authorized_person.pincode' => 'required|string|max:255',
            'authorized_person.mobile_no' => 'required|string|max:255',
            'authorized_person.district' => 'required|string|max:255',
            'authorized_person.state' => 'required|string|max:255',
            'authorized_person.fax_no' => 'required|string|max:255',
            'authorized_person.email' => 'required|email|max:255',

            // Bank Details Wizard
            'ifsc_code' => 'required|string|max:255',
            'account_holder_name' => 'required|string|max:255',
            'bank_name' => 'required|string|max:255',
            'branch_name' => 'required|string|max:255',
            'bank_address' => 'required|string|max:255',
            'branch_city' => 'required|string|max:255',
            'account_no' => 'required|string|max:255',
            'micr_code' => 'required|string|max:255',
            'account_type' => 'required|string|in:Saving,Current',

            // Other Details Wizard
            'dealer_mode' => 'required|string|in:Online,Current',
            'dealer_numbers' => 'required|string|in:Less than 25,More than and equal to 25',
            'no_of_dealer' => 'required|integer',
            'dealer_list_file' => 'required|file',
            'state_of_dealer_presence' => 'required|array',
            'state_of_dealer_presence.*' => 'required|string|in:Delhi',

            // Declaration
            'declaration' => 'required|accepted',
        ];
    }
}
