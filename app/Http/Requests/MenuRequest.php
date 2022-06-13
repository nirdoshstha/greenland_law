<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
                'title'             =>'required|max:191',
                'slug'              => 'required|string|max:191|unique:menus,slug,' .$this->id,
                'order'              => 'required|integer|min:1|unique:menus,order,' .$this->id,
        ];
    }
}
