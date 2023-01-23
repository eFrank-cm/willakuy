<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'mod_code'=> 'required',
            'number'=> 'required',
            'name'=> 'required',
            'level'=> 'required',
            'type'=> 'required',
            'province'=> 'required',
            'district'=> 'required',
            'zone'=> 'required',
            'address'=> 'required',
            'dni' => 'required'
        ];
    }
}
