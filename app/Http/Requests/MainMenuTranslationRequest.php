<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainMenuTranslationRequest extends FormRequest
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
            'name' => 'required|unique:main_menu_translation,name,'.$this->route('main_menu'),
            'index' => 'required|unique:main_menu,index,'.$this->route('main_menu'),
            'url' => 'required|unique:main_menu,url,'.$this->route('main_menu'),
            'language' => 'required',
        ];
    }
}
