<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudRequest extends FormRequest
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
        if(request()->segment(1) == 'schools'){
            return [
                'mod_code' => 'required',
                'number' => 'required',
                'name' => 'required',
                'level' => 'required',
                'type' => 'required',
                'province' => 'required',
                'district' => 'required',
                'zone' => 'required',
                'address' => 'required'
            ];
        }
        if(request()->segment(1) == 'employees'){
            return [
                'dni' => 'required',
                'name' => 'required',
                'last_names' => 'required',
                'email' => 'required',
                'mobile_num' => 'required',
                'edu_level' => 'required',
                'profession' => 'required',
                'specialty' => 'required',
                'degree' => 'required',
                'study_center' => 'required',
                'mention' => 'required'
            ];
        }
    }
}
