<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideShow;
use App\Models\ProjectCategory;
use App\Models\ActivityCategory;

class HomeController extends Controller
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
        $this->data +=[
                        'slide_shows' => SlideShow::orderBy('index', 'asc')->get(),
                        'projects' => ProjectCategory::orderBy('index', 'asc')->get(),
                        'activities' => ActivityCategory::orderBy('index', 'asc')->get(),
                    ];
        return view('frontend.home', $this->data);
    }

}
