<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class HistoryRequest extends FormRequest
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
            'main' => 'required|boolean',
            'registered_at' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];

        return $rules;
    }

    public function messages()
    {
        $messages = [
            'main.required' => '메인 페이지 노출 여부를 선택해주세요.',
            'registered_at.required' => '진행 일자를 선택해주세요.',
            'content.required' => '내용을 작성해주세요.',
        ];

        return $messages;
    }
}
