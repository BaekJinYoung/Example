<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PopupRequest extends FormRequest
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
    public function rules()
    {
        $rules = [
            'title' => 'required',
            'link' => 'nullable'
        ];

        if ($this->isMethod('post')) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        } elseif ($this->isMethod('patch')) {
            $rules['image'] = 'nullable';
        }

        return $rules;
    }
    public function messages()
    {
        $messages = [
            'title.required' => '제목을 작성해주세요.',
            'mobile_title.required' => 'MOBILE 제목을 작성해주세요.',
            'subtitle.required' => '부제목을 작성해주세요.',
            'mobile_subtitle.required' => 'MOBILE 부제목을 작성해주세요.',
            'details.required' => '내용을 작성해주세요.',
            'mobile_details.required' => 'MOBILE 내용을 작성해주세요.',
        ];

        if ($this->isMethod('post')) {
            $messages['image.required'] = '이미지가 비어있습니다.';
            $messages['mobile_image.required'] = 'MOBILE 이미지가 비어있습니다.';
        }

        return $messages;
    }
}
