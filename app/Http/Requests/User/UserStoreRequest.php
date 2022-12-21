<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name'=>'required|string',
            'level_id'=>'required|integer|exists:levels,id',
            'sex'=>'required|string',
            'birthDate'=>'required|date',
            'age'=>'required|integer',
            'hobby'=>'required|string',
            'password'=>'required|string|confirmed'
        ];
    }
}
