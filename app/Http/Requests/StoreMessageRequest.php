<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'max:10'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required','string'],
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'حقل الاسم مطلوب ادخاله.',
            'email.required' => 'حقل الايميل مطلوب ادخاله.',
            'email.email' => 'حقل الايمل يجب ان يكون بصيغة ايميل صحيحة.',
            'phone.required' => 'حقل رقم الهاتف مطلوب ادخاله.',
            'subject.required' => 'حقل عنوان الرسالة مطلوب ادخاله.',
            'message.required' => 'حقل الرسالة مطلوب ادخاله.',
        ];
    }
}
