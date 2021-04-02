<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRentalHouseRequest extends FormRequest
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
            'rentalStartDate' => ['required', 'date'],
            'rentalEndDate' => ['required', 'date'],
        ];
    }

    public function messages()
    {
        return [
            'rentalStartDate.required' => 'Ngày bắt đầu không được để trống!',
            'rentalStartDate.date' => 'Định dạng ngày không hợp lệ!',
            'rentalEndDate.required' => 'Ngày kết thúc không được để trống!',
            'rentalEndDate.date' => 'Định dạng ngày không hợp lệ!',
        ];
    }
}
