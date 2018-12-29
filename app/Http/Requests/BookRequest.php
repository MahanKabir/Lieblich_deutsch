<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'bookName'=>'required|max:2500',
            'bookPrice'=>'required',
            'bookAbout'=>'required',
            'bookType'=>'required',
            'description'=>'required',
            'img_url'=>'required|mimes:jpeg,png,bmp'
        ];
    }
}
