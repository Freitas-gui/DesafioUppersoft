<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateClientUserRequest extends FormRequest
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
            'name' =>'required|max:50|min:8|string',
            'cpf' =>'required|digits:11',
            'birth' =>'required',
            'email' =>'required|max:50',
            'tel' =>'required|numeric',
            'address' =>'required|max:250',
            'city' =>'required|max:250',
            'state' =>'required|max:250',
        ];
    }
}


