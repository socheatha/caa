<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideShowRequest extends FormRequest
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
			'name_en' => 'required|unique:slide_show,name_en,'.((isset($this->slide_show))? $this->slide_show->id : ''),
			'index' => 'required|unique:slide_show,index,'.((isset($this->slide_show))? $this->slide_show->id : ''),
		];
	}
}
