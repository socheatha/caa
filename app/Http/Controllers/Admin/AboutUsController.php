<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data = [
			'aboutus' => AboutUs::orderBy('index', 'asc')->get(),
		];
	
		return view('admin.about_us.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about_us = AboutUs::getSelectData('index', 'asc', 'id', 'name_en');
		$index = AboutUs::sortIndex();
		return view('admin.about_us.create')->with(compact('index', 'about_us'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUsMenu  $aboutUsMenu
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUsMenu $aboutUsMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUsMenu  $aboutUsMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUsMenu $aboutUsMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUsMenu  $aboutUsMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUsMenu $aboutUsMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUsMenu  $aboutUsMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUsMenu $aboutUsMenu)
    {
        //
    }
}
