<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
    public function messages(){
        return [
            'name_ar.required' =>__('messages.offer name ar'),
            'details_ar.required' =>__('messages.details ar required'),
             'name_en.required' =>__('messages.offer name ar'),
            'details_en.required' =>__('messages.details ar required'),
            'name_en.unique'=>__('messages.name unique'),
        ];
    }
    public function rules(){
        return [
            'name_ar' =>'required',
            'name_en' =>'required',

        ];
    }
}
