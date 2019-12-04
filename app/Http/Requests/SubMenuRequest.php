<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubMenuRequest extends FormRequest
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
            'name_en' => 'required|unique:sub_menu,name_en,'.((isset($this->sub_menu))? $this->sub_menu->id : ''),
            'index' => 'required|unique:sub_menu,index,'.((isset($this->sub_menu))? $this->sub_menu->id : ''),
            'url' => 'required|unique:sub_menu,url,'.((isset($this->sub_menu))? $this->sub_menu->id : ''),
        ];
    }
}
