<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PatentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'title' => 'required',
            'image' => 'nullable',
            'number' => 'required',
            'continue' => 'nullable',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'title.required' => '제목을 작성해주세요.',
            'number.required' => '특허번호 또는 발급번호를 입력하세요.',
        ];
    }
}
