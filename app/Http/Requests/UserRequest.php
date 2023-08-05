<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [];
        $currentAction = $this->route()->getActionMethod();
        switch ($currentAction):
            case 'store':
                //xây dựng rules validate trong này
                $rules = [
                    'name'=> 'required|string|min:4',
                    'email'=> 'required|email|unique:users',
                    'password'=> 'required|min:6',
                    'status'=>'required',
                    'image_url'=>'image|mimes:jpeg,jpg,png|max:5120',
                    'phone'=>'sometimes|nullable|min:10|unique:users'
                ];


            break;
            case 'edit':
                

                //xây dựng rules validate trong này
                $rules = [
                    'name'=> 'required|string|min:4',
                    'email' => 'required|email|',Rule::unique('users')->ignore($this->id),
                    'password'=> 'required|min:6',
                    'status'=>'required',
                    'image_url'=>'image|mimes:jpeg,jpg,png|max:5120',
                    'phone'=>'sometimes|nullable|min:9',Rule::unique('users')->ignore($this->id)




                ];


            break;

           
        endswitch;
        return $rules;
    }
    public function messages(): array
    {
        return [
            'required'=>':attribute bắt buộc phải nhập',
            'image'=>'Định dạng ảnh sai ',
            'integer'=>'Sai định dạng',
            'min'=>'Vui lòng nhập :attribute lớn hơn :min',
            'unique'=>':attribute đã tồn tại vui lòng chọn :attribute khác',
            'string'=>'Vui lòng không nhập số hoặc kí tự đặc biệt'
        ];
    }
    public function attributes()
    {
        return [
            'name'=>'Tên',
            'status'=>'tình trạng',
            'image'=>'Ảnh',
            'phone'=>'Số điện thoại',
            'password'=>'Mật khẩu'
        ];
    }
}
