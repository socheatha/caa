<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainMenuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:clients,name,'.$this->route('client'),
            'name_en' => 'required|unique:clients,name_en,'.$this->route('client'),
            'vat_tin' => 'required|unique:clients,vat_tin,'.$this->route('client'),
            'phone' => 'required',
            'language' => 'required',
            // 'email' => 'required|email',
            'inv_digit' => 'required|max:10|min:2|numeric',
            'tax_type_id' => 'required',
            'business_objective_id' => 'required',
            'controlled_by' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',
        ];
    }
}
