<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|min:3",
            "email" => "required|min:5|unique:doctors", // type email
            "password" => "required|min:6",
            "national_id" => "min:14|max:14|unique:doctors",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "You can't create a Doctor without a name!! are u kidding"
        ];
    }
}
