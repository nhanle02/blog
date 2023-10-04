<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $paramId = $this->route()->parameter('id');
        $rules = [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'username' => 'required|min:3|max:100|unique:users,username',
            'display_name' => 'nullable|max:100',
            'status' => 'nullable|in:on',
            'role' => 'required|in:1,2,3',
            'gender' => 'nullable|in:1,2,3',
            'avatar' => 'nullable|max:2048',
            'phone' => 'nullable|max:11|min:10',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8|max:32|confirmed',
        ];
        if ($paramId) {
            $rules['password'] = 'nullable|min:8|max:32|confirmed';
            $rules['username'] = [
                'required',
                'min:3',
                'max:100',
                Rule::unique('users')->ignore($paramId),
            ];
            $rules['email'] = [
                'required',
                'email:rfc,dns',
                Rule::unique('users')->ignore($paramId),
            ];
        }
        return $rules;
    }

    public function messages() {
        return [
            'first_name.required' => 'Họ phải bắt buộc nhập',
        ];
    }
}
