<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdate extends FormRequest
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
            'status_id' => ['integer','between:1,3']
        ];
    }

    public function messages()
    {
        return [
            'status_id.integer' => 'cần chọn tình trạng phòng',
            'status_id.between' => 'tình trạng phòng phải từ 1 đến 3'
        ];
    }
}
