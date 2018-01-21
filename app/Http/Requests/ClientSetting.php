<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class ClientSetting extends FormRequest
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
        $id = (int)Auth::guard('client')->user()->id;
        return [
            'Firstname' => 'required',
            'Lastname' => 'required',
            'Email' => [
                'required',
                'email',
                Rule::unique('clients')->ignore($id)
            ]

        ];
    }
}
