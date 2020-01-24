<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityStoreRequest extends FormRequest
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
            'name_en' => 'required|unique:activity,name_en,'.((isset($this->activity))? $this->activity->id : ''),
            'index' => 'required|unique:activity,index,'.((isset($this->activity))? $this->activity->id : ''),
            'thumbnail' => 'max:2048',
            'seo_keywords' => 'required',
            'seo_description' => 'required',
        ];
    }
}
