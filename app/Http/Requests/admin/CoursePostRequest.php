<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class CoursePostRequest extends FormRequest
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
            'title' => 'required|unique:activities|max:255',
            'subtitle' => 'required|max:255',
            'picture' => 'required',
            'target_audience' => 'required|max:255',
            'prerequisites' => '',
            'place' => 'required|max:255',
            'country' => 'required|max:255',
            'province' => 'required|max:255',
            'city' => 'required|max:255',
            'date' => 'required|after:today',
            'description' => 'required',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'amount' => 'required',
        ];
    }

    /**
     * @return Array
     */
    public function messages()
    {
        return [
            'end_time.after' => "L'heure de fin doit être supérieure à l'heure de début",
            'date.after' => 'Les dates de formation doivent être ultérieures à ce jour'
        ];
    }
}
