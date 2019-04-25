<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * 开启验证 true, 关闭 验证 false 关闭会导致 This action is unauthorized
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * 获取认证规则
     * @return array
     */
    public function rules()
    {
        return [
            //
            'phone' => [
                'required',
                'regex:/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|(17[0,3,5-8])|(18[0-9])|166|198|199)\d{8}$/',
//                'unique:users'
            ],
            'test' => [
                'required',
                'min:2',
                'max:5',
            ]
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => '电话号码不能为空',
            'phone.regex' => '电话号码格式不对',
            'test.required' => '测试参数test不能为空',
        ];
    }
}
