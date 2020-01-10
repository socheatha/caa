<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideShow;
use App\Models\ProjectCategory;
use App\Models\ActivityCategory;
use App\Models\Document;

class HomeController extends Controller
{
	
	public function __construct()
	{
		$web_lang = ((!session('locale'))? 'en':session('locale') );	
		$this->data =[
						'name' => 'name_'.$web_lang,
						'detail' => 'detail_'.$web_lang,
						'short_desc' => 'short_desc_'.$web_lang,
						'documents' => Document::orderBy('created_at', 'desc')->get(),
					];	
	}

	
	public function index()
	{
		$this->data +=[
						'slide_shows' => SlideShow::orderBy('index', 'asc')->get(),
						'project_categories' => ProjectCategory::orderBy('index', 'asc')->get(),
						'activity_categories' => ActivityCategory::orderBy('index', 'asc')->get(),
					];
		return view('frontend.home', $this->data);
	}

}
