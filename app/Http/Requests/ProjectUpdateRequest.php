<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUpdateRequest extends FormRequest
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
            'name_en' => 'required|unique:project,name_en,'.((isset($this->project))? $this->project->id : ''),
            'index' => 'required|unique:project,index,'.((isset($this->project))? $this->project->id : ''),
            'seo_keywords' => 'required',
            'seo_description' => 'required',
        ];
    }
}
