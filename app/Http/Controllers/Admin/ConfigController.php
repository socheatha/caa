<?php

namespace App\Http\Controllers\Admin;

use Auth;
use File;
use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config=Config::get()->first();
        return view('admin.website_config.index')->with(
            [
                'config'=> $config,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show(Config $config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $config)
    {
        dd('edit page');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Config $config)
    {
        if ($request->hasFile('logo')) {
            $path = 'images/config/';
            $extension = Input::file('logo')->getClientOriginalExtension(); 
            $logoname =  'bss_'.$config->id.'_logo.'.$extension;
            Input::file('logo')->move($path, $logoname);
            File::delete($path, $logoname);
            $logo=$path.$logoname;
        }else{
            $logo=$config->logo;
        }
        $config->update([
            'logo' => $logo,
            'title_en' => $request->title_en,
            'title_kh' => (($request->title_kh)? $request->title_kh : $request->title_en),
            'title_my' => (($request->title_my)? $request->title_my : $request->title_en),
            'title_sa' => (($request->title_sa)? $request->title_sa : $request->title_en),
            'keyword' => $request->keyword,
            'description_en' => $request->description_en,
            'description_kh' => (($request->description_kh)? $request->description_kh : $request->description_en),
            'description_my' => (($request->description_my)? $request->description_my : $request->description_en),
            'description_sa' => (($request->description_sa)? $request->description_sa : $request->description_en),
            'header_color' => $request->header_color,
            'menu_active_color' => $request->menu_active_color,
            'body_color' => $request->body_color,
            'text_color' => $request->text_color,
            'footer_color' => $request->footer_color,
            'updated_by' => Auth::user()->id,
        ]);
        
            
        return redirect()->route('admin.config.index')
            ->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Config $config)
    {
        //
    }
}
