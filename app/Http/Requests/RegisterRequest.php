<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'min:2|max:30',
            'email' => 'required|unique:users|email',
            'password' => 'min:6',
            'confirmPassword' => 'required',
            'phone' => 'min:10|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Tên người dùng tối thiểu 2 ký tự',
            'name.max' => 'Tên người dùng tối đa 30 ký tự',
            'email.required' => 'Bạn chưa điền email',
            'email.email' => 'Email không đúng',
            'email.unique' => 'Email đã được đăng ký',
            'password.min' => 'Mật khẩu tối thiểu 6 ý tự',
            'confirmPassword.required' => 'Bạn chưa xác nhận mật khẩu',
            'phone.numeric' => 'Số điện thoại phải là chữ số',
            'phone.min' => 'Số điện thoại tối thiểu 10 chữ số',
        ];
    }
}
