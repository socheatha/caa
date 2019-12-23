<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideShow;
use App\Models\ProjectCategory;
use App\Models\ActivityCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slide_shows = SlideShow::orderBy('index', 'asc')->get();
        $projects = ProjectCategory::orderBy('index', 'asc')->get();
        $activities = ActivityCategory::orderBy('index', 'asc')->get();
        return view('frontend.home')->with(compact('slide_shows','projects','activities'));
    }

}
