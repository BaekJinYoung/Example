<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class NoticeRequest extends FormRequest
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
            'details' => 'required',
            'summary' => 'required',
            'writer' => 'required',
            'information' => 'required',
            'registered_at' => 'required',
            'url' => 'nullable',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'title.required' => '제목을 작성해주세요.',
            'details.required' => '내용을 작성해주세요.',
            'summary.required' => '한줄요약을 작성해주세요.',
            'writer.required' => '저자를 작성해주세요.',
            'information.required' => '발행정보를 작성해주세요.',
            'registered_at.required' => '발행일자를 선택해주세요.',
        ];
    }
}
