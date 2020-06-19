<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\Document;
use App\Models\ProjectCategory;

class ProjectController extends Controller
{
    
    public function getProjectDetail(Project $project)
    {
        $web_lang = ((!session('locale'))? 'en': session('locale') );
        $this->data =[
                        'web_lang' => $web_lang,
                        'name' => 'name_'.$web_lang,
                        'detail' => 'detail_'.$web_lang,
                        'short_desc' => 'short_descript_'.$web_lang,
						'copyright' => 'copyright_'.$web_lang,
						'phone' => 'phone_'.$web_lang,
						'address' => 'address_'.$web_lang,
						'title' => 'title_'.$web_lang,
                        'project' => $project,
						'web_config' => Config::first(),
						'documents' => Document::orderBy('created_at', 'desc')->get(),
                    ];  
        return view('frontend.project.detail', $this->data);
    }
    
    public function project_category(ProjectCategory $projectCategory)
    {
        $web_lang = ((!session('locale'))? 'en': session('locale') );
        $this->data =[
                        'web_lang' => $web_lang,
                        'name' => 'name_'.$web_lang,
                        'detail' => 'detail_'.$web_lang,
                        'short_desc' => 'short_descript_'.$web_lang,
						'copyright' => 'copyright_'.$web_lang,
						'phone' => 'phone_'.$web_lang,
						'address' => 'address_'.$web_lang,
                        'project_category' => $projectCategory,
                        'title' => 'title_'.$web_lang,
						'web_config' => Config::first(),
						'documents' => Document::orderBy('created_at', 'desc')->get(),
                    ];  
        return view('frontend.project.category', $this->data);
    }

}
