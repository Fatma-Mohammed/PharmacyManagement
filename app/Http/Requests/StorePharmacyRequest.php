<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePharmacyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // TODO : edit it with roles
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required",
            "email" => ["required", "email", Rule::unique("pharmacies")->ignore($this->pharmacy)],
            "password" => "required_without:id", /*min:6*/
            "avatar" => "image|max:1999|mimes:jpeg,jpg,png|sometimes",
            "priority" => "required",
            "area_id" => "required",
            "national_id" => ["required", "min:14", "max:14", Rule::unique("pharmacies")->ignore($this->pharmacy)],
//            todo : validate area_id and make sure that it belongs to real registered Area
        ];
    }

    // todo : custom validator for national_id (later)
}
