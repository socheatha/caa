<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContanUsController extends Controller
{
	public function index()
	{
        return view('frontend.contact_us');
	}
}
