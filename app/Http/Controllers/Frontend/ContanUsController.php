<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContanUsController extends Controller
{
	
    public function __construct()
    {
        $web_lang = ((!session('locale'))? 'en':session('locale') );	
        $this->data =[
                        'name' => 'name_'.$web_lang,
                        'detail' => 'detail_'.$web_lang,
                        'short_desc' => 'short_desc_'.$web_lang,
                    ];	
    }

	public function index()
	{
        return view('frontend.contact_us', $this->data);
	}
}
