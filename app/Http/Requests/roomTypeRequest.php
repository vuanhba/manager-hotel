<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class roomTypeRequest extends FormRequest
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
    public function rules()
    {
        
        $rules = [];
        $currentAction = $this->route()->getActionMethod();
        switch ($currentAction):
            case 'store':
                //xây dựng rules validate trong này
                $rules = [
                    'name'=> 'required|min:3|unique:room_type',
                    'description'=> 'required',
                    'image'=>'required|image|mimes:jpeg,jpg,png|max:5120',
                    'price_per_night'=>'required|integer' 
                ];


            break;
            case 'edit':
                //xây dựng rules validate trong này
                $rules = [
                    'name'=> 'required|min:3|unique:room_type',
                    'description'=> 'required',
                    'image'=>'image|mimes:jpeg,jpg,png|max:5120',
                     'price_per_night'=>'required|integer'
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
            'unique'=>':attribute đã tồn tại vui lòng chọn :attribute khác'
        ];
    }
    public function attributes()
    {
        return [
            'name'=>'Tên',
            'description'=>'Mô tả',
            'image'=>'Ảnh',
            'price_per_night'=>'Giá'
        ];
    }
}
