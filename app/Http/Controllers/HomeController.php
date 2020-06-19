<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
use App\Models\SlideShow;
use App\Models\ProjectCategory;
use App\Models\ActivityCategory;
use App\Models\Document;

class HomeController extends Controller
{
	
	public function index()
	{
		$web_lang = ((!session('locale'))? 'en': session('locale') );

		$this->data =[
						'web_lang' => $web_lang,
						'name' => 'name_'.$web_lang,
						'detail' => 'detail_'.$web_lang,
						'short_desc' => 'short_desc_'.$web_lang,
						'welcome_title' => 'welcome_title_'.$web_lang,
						'welcome_message' => 'welcome_message_'.$web_lang,
						'title' => 'title_'.$web_lang,
						'copyright' => 'copyright_'.$web_lang,
						'phone' => 'phone_'.$web_lang,
						'address' => 'address_'.$web_lang,
						'web_config' => Config::first(),
						'documents' => Document::orderBy('created_at', 'desc')->get(),
						'slide_shows' => SlideShow::orderBy('index', 'asc')->get(),
						'project_categories' => ProjectCategory::orderBy('index', 'asc')->get(),
						'activity_categories' => ActivityCategory::orderBy('index', 'asc')->get(),
					];
		return view('frontend.home', $this->data);
	}

}
