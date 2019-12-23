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
        if(!$config){
            Config::create([
                'logo'=>'1',
                'email'=>'1',
                'social'=>'1',
                'fb_url'=>'1',
                'map_location'=>'1',
                'header_color'=>'1',
                'footer_color'=>'1',
                'body_color'=>'1',
                'menu_active_color'=>'1',
                'text_color'=>'1',
                'phone_en'=>'1',
                'phone_kh'=>'1',
                'phone_my'=>'1',
                'phone_sa'=>'1',
                'address_en'=>'1',
                'address_kh'=>'1',
                'address_my'=>'1',
                'address_sa'=>'1',
                'copyright_en'=>'1',
                'copyright_kh'=>'1',
                'copyright_my'=>'1',
                'copyright_sa'=>'1',
                'welcome_message_en'=>'1',
                'welcome_message_kh'=>'1',
                'welcome_message_my'=>'1',
                'welcome_message_sa'=>'1',
                'created_by'=>'1',
                'updated_by'=>'1'
            ]);
        }
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
            'title_en' => !empty($request->title_en)?$request->title_en:$config->title_en,
            'title_kh' => !empty((($request->title_kh)? $request->title_kh : $request->title_en))?(($request->title_kh)? $request->title_kh : $request->title_en):$config->title_kh,
            'title_my' => !empty((($request->title_my)? $request->title_my : $request->title_en))?(($request->title_my)? $request->title_my : $request->title_en):$config->title_my,
            'title_sa' => !empty((($request->title_sa)? $request->title_sa : $request->title_en))?(($request->title_sa)? $request->title_sa : $request->title_en):$config->title_sa,
            'keyword' => !empty($request->keyword)?$request->keyword:$config->keyword,
            'description_en' => !empty($request->description_en)?$request->description_en:$config->description_en,
            'description_kh' => !empty((($request->description_kh)? $request->description_kh : $request->description_en))?(($request->description_kh)? $request->description_kh : $request->description_en):$config->description_kh,
            'description_my' => !empty((($request->description_my)? $request->description_my : $request->description_en))?(($request->description_my)? $request->description_my : $request->description_en):$config->description_my,
            'description_sa' => !empty((($request->description_sa)? $request->description_sa : $request->description_en))?(($request->description_sa)? $request->description_sa : $request->description_en):$config->description_sa,
            'header_color' => !empty($request->header_color)?$request->header_color:$config->header_color,
            'menu_active_color' => !empty($request->menu_active_color)?$request->menu_active_color:$config->menu_active_color,
            'body_color' => !empty($request->body_color)?$request->body_color:$config->body_color,
            'text_color' => !empty($request->text_color)?$request->text_color:$config->text_color,
            'footer_color' => !empty($request->footer_color)?$request->footer_color:$config->footer_color,

            'email' => !empty($request->email)?$request->email:$config->email,
            'fb_url' => !empty($request->fb_url)?$request->fb_url:$config->fb_url,
            'instagram_url' => !empty($request->instagram_url)?$request->instagram_url:$config->instagram_url,
            'tw_url' => !empty($request->tw_url)?$request->tw_url:$config->tw_url,
            'linkedin_url' => !empty($request->linkedin_url)?$request->linkedin_url:$config->linkedin_url,
            'map_location' => !empty($request->map_location)?$request->map_location:$config->map_location,

            'welcome_message_en' => !empty($request->welcome_message_en)?$request->welcome_message_en:$config->welcome_message_en,
            'welcome_message_kh' => !empty((($request->welcome_message_kh)? $request->welcome_message_kh : $request->welcome_message_en))?(($request->welcome_message_kh)? $request->welcome_message_kh : $request->welcome_message_en):$config->welcome_message_kh,
            'welcome_message_my' => !empty((($request->welcome_message_my)? $request->welcome_message_my : $request->welcome_message_en))?(($request->welcome_message_my)? $request->welcome_message_my : $request->welcome_message_en):$config->welcome_message_my,
            'welcome_message_sa' => !empty((($request->welcome_message_sa)? $request->welcome_message_sa : $request->welcome_message_en))?(($request->welcome_message_sa)? $request->welcome_message_sa : $request->welcome_message_en):$config->welcome_message_sa,

            'phone_en' => !empty($request->phone_en)?$request->phone_en:$config->phone_en,
            'phone_kh' => !empty((($request->phone_kh)? $request->phone_kh : $request->phone_en))?(($request->phone_kh)? $request->phone_kh : $request->phone_en):$config->phone_kh,
            'phone_my' => !empty((($request->phone_my)? $request->phone_my : $request->phone_en))?(($request->phone_my)? $request->phone_my : $request->phone_en):$config->phone_my,
            'phone_sa' => !empty((($request->phone_sa)? $request->phone_sa : $request->phone_en))?(($request->phone_sa)? $request->phone_sa : $request->phone_en):$config->phone_sa,

            'address_en' => !empty($request->address_en)?$request->address_en:$config->address_en,
            'address_kh' => !empty((($request->address_kh)? $request->address_kh : $request->address_en))?(($request->address_kh)? $request->address_kh : $request->address_en):$config->address_kh,
            'address_my' => !empty((($request->address_my)? $request->address_my : $request->address_en))?(($request->address_my)? $request->address_my : $request->address_en):$config->address_my,
            'address_sa' => !empty((($request->address_sa)? $request->address_sa : $request->address_en))?(($request->address_sa)? $request->address_sa : $request->address_en):$config->address_sa,

            'copyright_en' => !empty($request->copyright_en)?$request->copyright_en:$config->copyright_en,
            'copyright_kh' => !empty((($request->copyright_kh)? $request->copyright_kh : $request->copyright_en))?(($request->copyright_kh)? $request->copyright_kh : $request->copyright_en):$config->copyright_kh,
            'copyright_my' => !empty((($request->copyright_my)? $request->copyright_my : $request->copyright_en))?(($request->copyright_my)? $request->copyright_my : $request->copyright_en):$config->copyright_my,
            'copyright_sa' => !empty((($request->copyright_sa)? $request->copyright_sa : $request->copyright_en))?(($request->copyright_sa)? $request->copyright_sa : $request->copyright_en):$config->copyright_sa,

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
