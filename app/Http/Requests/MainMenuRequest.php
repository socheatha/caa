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
            'name_en' => 'required|unique:main_menu,name_en,'.((isset($this->main_menu))? $this->main_menu->id : ''),
            'index' => 'required|unique:main_menu,index,'.((isset($this->main_menu))? $this->main_menu->id : ''),
            'url' => 'required|unique:main_menu,url,'.((isset($this->main_menu))? $this->main_menu->id : ''),
        ];
    }
}
