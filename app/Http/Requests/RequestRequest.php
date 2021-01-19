<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRequest extends FormRequest
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
            'subject' => 'required|min:2|max:50',
            'name' => 'required|min:2|max:50',
            'email' => 'required|min:2|max:50|email',
            'message' => 'required|min:2|max:2500',
            'file' => 'array|min:1',
            'file.*' => 'file|mimes:txt,docx,zip|max:3072'
        ];
    }
}
