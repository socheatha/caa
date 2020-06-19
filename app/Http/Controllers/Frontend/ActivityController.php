<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Activity;
use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\ActivityCategory;

class ActivityController extends Controller
{

    public function getactivityDetail(Activity $activity)
    {
		$web_lang = ((!session('locale'))? 'en':session('locale') );
		$this->data =[
                        'web_lang' => $web_lang,
						'name' => 'name_'.$web_lang,
						'detail' => 'detail_'.$web_lang,
						'short_desc' => 'short_descript_'.$web_lang,
						'copyright' => 'copyright_'.$web_lang,
						'phone' => 'phone_'.$web_lang,
						'address' => 'address_'.$web_lang,
                        'activity' => $activity,
												'title' => 'title_'.$web_lang,
						'web_config' => Config::first(),
						'documents' => Document::orderBy('created_at', 'desc')->get(),
                    ];  
        return view('frontend.activity.detail', $this->data);
    }

    public function activity_category(ActivityCategory $activityCategory)
    {
		$web_lang = ((!session('locale'))? 'en':session('locale') );
		$this->data =[
                        'web_lang' => $web_lang,
						'name' => 'name_'.$web_lang,
						'detail' => 'detail_'.$web_lang,
						'short_desc' => 'short_descript_'.$web_lang,
						'copyright' => 'copyright_'.$web_lang,
						'phone' => 'phone_'.$web_lang,
						'address' => 'address_'.$web_lang,
                        'activity_category' => $activityCategory,
						'web_config' => Config::first(),
						'documents' => Document::orderBy('created_at', 'desc')->get(),
                    ];  
        return view('frontend.activity.category', $this->data);
    }
    
}
