<?php

namespace App\Http\Requests\Coupon;

use Illuminate\Foundation\Http\FormRequest;

class CreateCouponRequest extends FormRequest
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
            'name' => 'required|unique:coupons',
            'discount' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Trường tên mã không được trống',
            'name.unique' => 'Tên mã bị trùng',
            'discount.required' => 'Giá không được trống',
        ];
    }
}
