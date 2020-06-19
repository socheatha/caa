<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
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
            'name_en' => 'required|unique:about_us,name_en,'.((isset($this->about_us))? $this->about_us->id : ''),
            'index' => 'required|unique:about_us,index,'.((isset($this->about_us))? $this->about_us->id : ''),
            'seo_keywords' => 'required',
            'seo_description' => 'required',
        ];
    }
}
