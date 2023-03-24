<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPassword extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'old_password' => 'required',
            'password' => 'required|min:8|max:25',
            'confirm_password' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return
        [
            'old_password.required' => 'Please enter your current password!',
            'password.required' => 'Please enter new password!',
            'password.required|min:8|max:25' => '',
            'confirm_password.required' => 'Please enter confirm password!',
            'confirm_password.same:password' => 'Confirmation password does not match',
        ];
    }
}
