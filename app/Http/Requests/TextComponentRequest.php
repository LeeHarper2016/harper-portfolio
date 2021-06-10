<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TextComponentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'anchor' => ['required', 'Unique:App\Models\TextComponent,anchor'],
            'title' => ['required'],
            'body' => ['required'],
            'image' => ['required', 'image']
        ];
    }
}
