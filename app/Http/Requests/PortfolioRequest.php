<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
                'name'         =>'required|max:191',
                'order'         => 'required|integer|min:1|unique:portfolios,order,' .$this->id,
                'description'   =>'required|max:2000',
                'image'         =>'nullable|max:500',
        ];
    }
}
