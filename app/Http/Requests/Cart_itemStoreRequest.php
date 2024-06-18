<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Cart_itemStoreRequest extends FormRequest
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
            //
            'option1' =>'required',
            'option2' =>'required',
            'option3' =>'required'
        ];
    }
    public function messages(){
        return[
            'option1.required'=>'Hãy chọn lượng đá mà bạn uống',
            'option2.required'=>'Hãy chọn lượng đường mà bạn uống',
            'option3.required'=>'Hãy chọn size mà bạn muốn'
        ];
    }
}
