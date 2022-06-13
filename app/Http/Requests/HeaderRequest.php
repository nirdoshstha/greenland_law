<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeaderRequest extends FormRequest
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
                'title'         =>'required|max:191',
                'subtitle'      =>'required|max:1000',
                'image'         =>'nullable|max:1000',
                'copyright'     =>'required|max:500',
        ];
    }
}