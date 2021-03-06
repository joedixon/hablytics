<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tag' => 'required|max:56',
            'at' => 'nullable|before:tomorrow',
            'value' => 'nullable|numeric'
        ];
    }
}
