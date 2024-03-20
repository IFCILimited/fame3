<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Name' => 'required|string|max:255',
            'oem_type' => 'required',
            'Address' => 'required|string|max:255',
            'Pincode' => 'required|string|max:10', // adjust the max length according to your needs
            'State' => 'required|string|max:255',
            'District' => 'required|string|max:255',
            'City' => 'required|string|max:255',
            'Person' => 'required|string|max:255',
            'Mobile' => 'required|string|max:15', // adjust the max length according to your needs
            'Mail' => 'required|string|email|max:255',
            // 'Fax' => 'required|string|max:255',
            'Registration' => 'required|string|max:255',
            // 'Registration_file' => 'required|mimes:pdf|max:1000',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'This field is required.',
            'max' => 'The :attribute must not be greater than :max characters.',
            'mimes' => 'The :attribute must be a file of type: :values.',
        ];
    }
}
