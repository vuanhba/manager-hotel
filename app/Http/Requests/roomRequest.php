<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class roomRequest extends FormRequest
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
                    'room_number'=> 'required',
                    'room_type_id'=> 'required',
                    'description'=> 'required',
                   

                    'status'=>'required' 
                ];


            break;
            case 'edit':
                //xây dựng rules validate trong này
                $rules = [
                    'room_number'=> 'required',
                    'room_type_id'=> 'required',
                    'image'=>'required|image|mimes:jpeg,jpg,png|max:5120',
                    'images'=>'required|image|mimes:jpeg,jpg,png',
                    'description'=>'required',
                    'status'=>'required' 
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
            'mimes'=>'Chỉ chấp nhận các định dạng: jpeg, jpg, png',
           

            'integer'=>'Sai định dạng',
            'min'=>'Vui lòng nhập :attribute lớn hơn :min',
            'unique'=>':attribute đã tồn tại vui lòng chọn :attribute khác'
        ];
    }
    public function attributes()
    {
        return [
            'room_number'=>'Số phòng',
            'room_type_id'=>'Loại phòng',
            'image'=>'Ảnh nổi bật',
            'images[]'=>'Ảnh phụ',
            'status'=>'Trạng thái',
            'description'=>'Mô tả'
        ];
    }
}
