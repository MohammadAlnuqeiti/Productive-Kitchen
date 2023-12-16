<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducteRequest extends FormRequest
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
            'name' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'حقل الاسم مطلوب ادخاله.',
            'short_description.required' => 'حقل الوصف مطلوب ادخاله.',
            'long_description.required' => 'حقل التفاصيل مطلوب ادخاله.',
            'price.required' => ' حقل السعر مطلوب ادخاله. ',
            'price.numeric' => ' حقل السعر يجب ان يكون عدد وليس نص. ',
            'category_id' => 'حقل الصنف مطلوب ادخاله.',
            'image.required' => 'حقل الصورة مطلوب ادخاله.',
            'image.image' => 'حقل الصورة يجب ان يكون صورة.',
            'image.mimes' => ' jpg,png,jpeg,gif الصورة يجب ان تكون بصيغة .',
            'image.max' => ' الصورة يجب ان لا يتجاوز حجمها 2048 .',
        ];
    }
}
