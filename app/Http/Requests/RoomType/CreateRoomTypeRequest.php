<?php

namespace App\Http\Requests\RoomType;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoomTypeRequest extends FormRequest
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
            'name' => 'required',
            'common_price' => 'required',
            'description' => 'required',
            'feature_image' => 'required|image',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên loại phòng không được trống',
            'common_price.required' => 'Giá không được trống',
        ];
    }
}
