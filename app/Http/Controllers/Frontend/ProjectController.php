<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        return view('frontend.project_mujammak');
    }
     public function halaqah()
    {
        return view('frontend.project_halaqah');
    }
     public function primaryschool()
    {
        return view('frontend.project_primary_school');
    }
}
