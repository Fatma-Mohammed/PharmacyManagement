<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
            'name' => ['string', 'max:255'],
            'password' => ['string', 'min:8', 'confirmed'],
            'gender' => [Rule::in(['m', 'f'])],
            'date_of_birth' => ['date'],
            'avatar_img' => ['image', 'max:5120', 'mimes:jpeg,bmp,png'],
            'mobile_number' => ['size:11'],
            'national_id' => ['size:14', 'unique:users,national_id'],

        ];
    }
}
