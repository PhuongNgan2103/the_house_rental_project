<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => ['digits:10',Rule::unique('users')->ignore($this->user()->id)],
            'email' => ['email',Rule::unique('users')->ignore($this->user()->id)],
        ];
    }
    public function messages()
    {
        return [
            'phone.digits' => 'Số điện thoại không hợp lệ',
            'phone.unique' => 'Số điện thoại này đã tồn tại',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email này đã tồn tại',
        ];
    }
}
