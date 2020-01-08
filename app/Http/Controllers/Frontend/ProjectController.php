<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
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
        return view('frontend.project_mujammak', $this->data);
    }
     public function halaqah()
    {
        return view('frontend.project_halaqah', $this->data);
    }
     public function primaryschool()
    {
        return view('frontend.project_primary_school', $this->data);
    }
}
