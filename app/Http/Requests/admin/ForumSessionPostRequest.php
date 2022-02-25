<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ForumSessionPostRequest extends FormRequest
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
            'topic' => 'required|max:255',
            'speaker_id' => '',
            'day' => '',
            'token' => 'required',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ];
    }
}
