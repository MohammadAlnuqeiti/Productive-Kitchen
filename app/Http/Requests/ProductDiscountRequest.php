<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductDiscountRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'product_id' => ['required'],
            'discount_product' => ['required'],
        ];
    }
    public function messages(): array
    {
        return [
            'product_id.required' => 'حقل اسم المنتج مطلوب ادخاله.',
            'discount_product.required' => 'حقل نسبة الخصم مطلوب ادخاله.',
        ];
    }
}
