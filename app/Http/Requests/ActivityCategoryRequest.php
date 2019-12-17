<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityCategoryRequest extends FormRequest
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
            'name_en' => 'required|unique:activity_category,name_en,'.((isset($this->activity_category))? $this->activity_category->id : ''),
            'index' => 'required|unique:activity_category,index,'.((isset($this->activity_category))? $this->activity_category->id : ''),
            'color' => 'required',
            'seo_keywords' => 'required',
            'seo_description' => 'required',
        ];
    }
}
