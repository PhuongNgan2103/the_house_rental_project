<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'current_password' => ['required', 'min:6', 'max:8'],
            'new_password' => ['required', 'min:6', 'max:8'],
            'password_confirm' => ['required', 'min:6', 'max:8'],
        ];
    }
    public function messages()
    {
        return [
            'current_password.required' => 'Mật khẩu không được để trống',
            'current_password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'current_password.max' => 'Mật khẩu phải ít hơn 9 ký tự',
            'new_password.required' => 'Mật khẩu không được để trống',
            'new_password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'new_password.max' => 'Mật khẩu phải ít hơn 9 ký tự',
            'password_confirm.required' => 'Mật khẩu không được để trống',
            'password_confirm.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'password_confirm.max' => 'Mật khẩu phải ít hơn 9 ký tự',
        ];
    }
}
