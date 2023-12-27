<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'email'=>'required|unique:users',
            'type'=>'required',
            'password'=>'required',
            'status'=>'required',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Vui lòng nhập name',
            'email.required'=>'Vui lòng nhập email',
            'type.required'=>'Vui lòng nhập type',
            'password.required'=>'Vui lòng nhập password',
            'status.required'=>'Vui lòng nhập status',
            'email.unique'=>'Email đã tồn tại, vui lòng nhập email khác'
        ];
    }
}
