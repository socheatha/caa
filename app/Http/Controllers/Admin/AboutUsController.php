<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\AboutUs;
use App\Http\Requests\AboutUsRequest;
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

    
    public function store(AboutUsRequest $request)
    {
			$about_us = AboutUs::create([
																	'name_en' => $request->name_en,
																	'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
																	'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
																	'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
																	'detail_en' => $request->detail_en,
																	'detail_kh' => (($request->detail_kh)? $request->detail_kh : $request->detail_en),
																	'detail_my' => (($request->detail_my)? $request->detail_my : $request->detail_en),
																	'detail_sa' => (($request->detail_sa)? $request->detail_sa : $request->detail_en),
																	'index' => $request->index,
																	'seo_keywords' => $request->seo_keywords,
																	'seo_description' => $request->seo_description,
																	'created_by' => Auth::user()->id,
																	'updated_by' => Auth::user()->id,
																	]);
			// Redirect
			return redirect()->route('admin.about_us.index')
				->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
		}

		

    public function show(AboutUs $aboutUs)
    {
        //
    }

		
    public function edit(AboutUs $about_us)
    {
			$index = AboutUs::sortIndex();
			return view('admin.about_us.edit')->with(compact('index', 'about_us'));
    }

		
    public function update(AboutUsRequest $request, AboutUs $aboutUs)
    {
			$aboutUs->update([
												'name_en' => $request->name_en,
												'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
												'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
												'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
												'detail_en' => $request->detail_en,
												'detail_kh' => (($request->detail_kh)? $request->detail_kh : $request->detail_en),
												'detail_my' => (($request->detail_my)? $request->detail_my : $request->detail_en),
												'detail_sa' => (($request->detail_sa)? $request->detail_sa : $request->detail_en),
												'index' => $request->index,
												'seo_keywords' => $request->seo_keywords,
												'seo_description' => $request->seo_description,
												'updated_by' => Auth::user()->id,
											]);
			// Redirect
			return redirect()->route('admin.about_us.edit', $aboutUs->id)
				->with('success', '<strong>' .$aboutUs->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
    }

		
    public function destroy(AboutUs $aboutUs)
    {
			$name = $aboutUs->name_en;
			if ($aboutUs->delete()){
				// Redirect
				return redirect()->route('admin.about_us.index')
					->with('success', '<strong>' . $aboutUs->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
			}
    }
}
