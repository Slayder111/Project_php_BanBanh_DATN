<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RigisterUser extends FormRequest
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
            'name' => 'required|max:30|min:6',
            'email' => 'required|email|unique:users,email',
            'adress' => 'required',
            'phone' => 'required|numeric|digits_between:10,12',
            'password' => 'required|max:20|min:6',
            'repassword' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Phải điền đủ thông tin ',
            'name.max' => 'Họ tên không được vượt quá 30 ký tự.',
            'name.min' => 'Họ tên phải có ít nhất 6 ký tự.',
            'email.required' => 'Phải điền đủ thông tin ',
            'email.email' => 'Vui lòng nhập đúng định dạng email.',
            'email.unique' => 'Email đã tồn tại.',
            'adress.required' => 'Phải điền đủ thông tin ',
            'phone.required' => 'Phải điền đủ thông tin ',
            'phone.min' => 'Số điện thoại phải có ít nhất 10 ký tự.',
            'phone.max' => 'Số điện thoại không được vượt quá 12 ký tự.',
            'phone.numeric' => 'Số điện thoại phải là kí tự số.',
            'phone.digits_between' => 'Số điện thoại phải có từ 10 đến 12 ký tự.',
            'password.required' => 'Phải điền đủ thông tin ',
            'password.max' => 'Mật khẩu không được vượt quá 20 ký tự.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'repassword.required' => 'Phải điền đủ thông tin ',
            'repassword.same' => 'Mật khẩu nhập lại không khớp.',
        ];
    }

    
}
