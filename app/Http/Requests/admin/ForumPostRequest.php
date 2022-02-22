<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ForumPostRequest extends FormRequest
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
            'title' => 'required|max:255',
            'topic' => 'required|max:255',
            'description' => 'required',
            'picture' => 'required',
            'place' => 'required|max:255',
            'country' => 'required|max:255',
            'province' => 'required|max:255',
            'city' => 'required|max:255',
            'start_date' => 'required|after:today',
            'end_date' => 'required|after:start_date',
        ];
    }
}
