<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Document;

class ActivityController extends Controller
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

    public function getactivityDetail(Activity $activity)
    {
        $this->data +=[
                        'activity' => $activity,
                    ];  
        return view('frontend.activity.detail', $this->data);
    }
    
}
