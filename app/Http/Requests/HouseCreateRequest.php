<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HouseCreateRequest extends FormRequest
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
            'name' => ['required', 'unique:houses,name'],
            'room_type_id' => ['required', 'integer'],
            'address' => ['required'],
            'numberBedRoom' => ['required', 'integer', 'between:1,10'],
            'numberBathRoom' => ['required', 'integer', 'between:1,3'],
            'pricePerDay' => ['required', 'integer'],
            'desc' => ['required'],
            'images.*' => ['mimes:jpg,jpeg,png'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên căn nhà không được bỏ trống!',
            'name.unique' => 'Tên căn nhà đã tồn tại!',
            'room_type_id.required' => 'Cần chọn một loại phòng!',
            'room_type_id.integer' => 'Loại phòng không tồn tại!',
            'address.required' => 'Địa chỉ không được bỏ trống!',
            'numberBedRoom.required' => 'Số lượng phòng ngủ không được bỏ trống!',
            'numberBedRoom.integer' => 'Số lượng phòng ngủ không hợp lệ!',
            'numberBedRoom.between' => 'Số lượng phòng ngủ phải từ 1 đến 10!',
            'numberBathRoom.required' => 'Số lượng phòng tắm không được bỏ trống!',
            'numberBathRoom.integer' => 'Số lượng phòng tắm không hợp lệ!',
            'numberBathRoom.between' => 'Số lượng phòng tắm phải từ 1 đến 10!',
            'pricePerDay.required' => 'Số tiền thuê một ngày không được bỏ trống!',
            'pricePerDay.integer' => 'Số tiền thuê một ngày không hợp lệ!',
            'desc.required' => 'Hãy nhập mô tả về căn nhà!',
            'images.*.mimes' => 'Chỉ có thể up ảnh có đuôi jpg, jpeg, png',
        ];
    }
}
