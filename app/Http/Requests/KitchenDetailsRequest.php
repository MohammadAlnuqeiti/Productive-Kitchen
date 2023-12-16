<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KitchenDetailsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ];
    }
    public function messages(): array
    {
        return [
            
            'short_description.required' => 'حقل الوصف مطلوب ادخاله.',
            'long_description.required' => 'حقل التفاصيل مطلوب ادخاله.',
            'image.required' => 'حقل الصورة مطلوب ادخاله.',
            'image.image' => 'حقل الصورة يجب ان يكون صورة.',
            'image.mimes' => ' jpg,png,jpeg,gif الصورة يجب ان تكون بصيغة .',
            'image.max' => ' الصورة يجب ان لا يتجاوز حجمها 2048 .',
        ];
    }
}


