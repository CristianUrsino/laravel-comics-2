<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:255',
            'price' => 'required|max:255',
            'sale_date' => 'required',
            'series' => 'required|max:100',
            'type' => 'required'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'il campo titolo è obbligatorio',
            'title.min' => 'il campo titolo deve avere almeno :min caratteri',
            'title.max' => 'il campo titolo deve avere almeno :max caratteri',
            'price.required' => 'il campo price è obbligatorio',
            'price.max' => 'il campo price deve avere almeno :max caratteri',
            'series.required' => 'il campo series è obbligatorio',
            'series.max' => 'il campo series deve avere almeno :max caratteri',
            'sale_date.required' => 'il campo sale_date è obbligatorio',
            'type' => 'il campo type è obbligatorio',
        ];
    }
}
