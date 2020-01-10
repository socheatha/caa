<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Document;

class ProjectController extends Controller
{
    
    public function __construct()
    {
        $web_lang = ((!session('locale'))? 'en': session('locale') );
        // dd(session('locale'));
        $this->data =[
                        'name' => 'name_'.$web_lang,
                        'detail' => 'detail_'.$web_lang,
                        'short_desc' => 'short_desc_'.$web_lang,
						'documents' => Document::orderBy('created_at', 'desc')->get(),
                    ];  
    }

    public function getProjectDetail(Project $project)
    {
        $web_lang = ((!session('locale'))? 'en': session('locale') );
        $this->data +=[
                        'name' => 'name_'.$web_lang,
                        'detail' => 'detail_'.$web_lang,
                        'short_desc' => 'short_desc_'.$web_lang,
                        'project' => $project,
                    ];  
        return view('frontend.project.detail', $this->data);
    }

}
