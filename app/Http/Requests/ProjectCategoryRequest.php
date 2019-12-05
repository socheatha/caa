<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectCategoryRequest extends FormRequest
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
            'name_en' => 'required|unique:project_category,name_en,'.((isset($this->project_category))? $this->project_category->id : ''),
            'index' => 'required|unique:project_category,index,'.((isset($this->project_category))? $this->project_category->id : ''),
            'color' => 'required',
            'seo_keywords' => 'required',
            'seo_description' => 'required',
        ];
    }
}
