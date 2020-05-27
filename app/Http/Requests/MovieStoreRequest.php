<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieStoreRequest extends FormRequest
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
            'name' => 'required|min:3|max:200',
            'slug' => 'required|min:3|max:150',
            'description' => 'required|min:3|max:250',
            'release_date' => 'required|digits_between:4,4',
            'country_code' => 'required|max:2',

        ];
    }
}
