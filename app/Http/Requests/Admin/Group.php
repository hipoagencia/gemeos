<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Group extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check() && Auth::user()->is_admin >= 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:191',
            'description' => 'required|min:8',
            'shareInitial' => 'required_with:shareFinal|integer|min:1|digits_between: 1,20',
            'shareFinal' => 'required_with:shareInitial|integer|gt:shareInitial|digits_between:1,20',
        ];
    }
}
