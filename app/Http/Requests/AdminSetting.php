<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AdminSetting extends FormRequest
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
        $id = (int)Auth::user()->id;
        return [
            'Username' => [
                    'required',
                    'min:3',
                    Rule::unique('users')->ignore($id)
            ],
            'Email' => [
                    'required',
                    'email',
                    Rule::unique('users')->ignore($id)
            ],
            'FirstName' => 'required',
            'LastName' => 'required',
            'Address' => 'required',
            'City' => 'required',
            'Country' => 'required',
            'Postcode' => 'required'
        ];
    }
}
