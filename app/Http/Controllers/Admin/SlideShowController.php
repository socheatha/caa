<?php

namespace App\Http\Controllers\Admin;

use App\Models\SlideShow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SlideShowRequest;
use Auth;
use Image;
use File;

class SlideShowController extends Controller
{
	protected $path;

	public function __construct()
	{
		$this->path = public_path().'/images/slide_shows/';
	}
	
	public function index()
	{
		$this->data = [
			'slide_shows' => SlideShow::orderBy('index', 'asc')->get(),
		];
	
		return view('admin.slide_show.index', $this->data);
	}

	public function create()
	{
		$index = SlideShow::sortIndex();
		return view('admin.slide_show.create')->with(compact('index'));
	}

	
	public function store(SlideShowRequest $request)
	{
		// dd($request->all());
		if ($request->file('image')) {

			$slide_show = SlideShow::create([
															'name_en' => $request->name_en,
															'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
															'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
															'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
															'short_desc_en' => $request->short_desc_en,
															'short_desc_kh' => (($request->short_desc_kh)? $request->short_desc_kh : $request->short_desc_en),
															'short_desc_my' => (($request->short_desc_my)? $request->short_desc_my : $request->short_desc_en),
															'short_desc_sa' => (($request->short_desc_sa)? $request->short_desc_sa : $request->short_desc_en),
															'detail_en' => $request->detail_en,
															'detail_kh' => (($request->detail_kh)? $request->detail_kh : $request->detail_en),
															'detail_my' => (($request->detail_my)? $request->detail_my : $request->detail_en),
															'detail_sa' => (($request->detail_sa)? $request->detail_sa : $request->detail_en),
															'index' => $request->index,
															'seo_keywords' => $request->seo_keywords,
															'seo_description' => $request->seo_description,
															'image' => 'null',
															'created_by' => Auth::user()->id,
															'updated_by' => Auth::user()->id,
														]);

			$path = $this->path;
			if (!file_exists($path)) {
					mkdir($path, 666, true);
			}
			$image = $request->file('image');
			$image_name = time() .'_'. $slide_show->id .'.png';
			$thumb = Image::make($image->getRealPath())->resize(800, 422)->save($path.'thumb_'. $image_name);
			$img = Image::make($image->getRealPath())->resize(2800, 1500)->save($path.$image_name);
			$slide_show->update(['image' => $image_name]);
		}

		// Redirect
		return redirect()->route('admin.slide_show.index')
			->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
	}

	
	public function show(SlideShow $slide_show)
	{
		//
	}

	public function edit(SlideShow $slide_show)
	{
		return view('admin.slide_show.edit')->with(compact('slide_show'));
	}

	public function update(SlideShowRequest $request, SlideShow $slide_show)
	{
		$slide_show->update([
										'name_en' => $request->name_en,
										'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
										'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
										'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
										'short_descript_en' => $request->short_descript_en,
										'short_descript_kh' => (($request->short_descript_kh)? $request->short_descript_kh : $request->short_descript_en),
										'short_descript_my' => (($request->short_descript_my)? $request->short_descript_my : $request->short_descript_en),
										'short_descript_sa' => (($request->short_descript_sa)? $request->short_descript_sa : $request->short_descript_en),
										'detail_en' => $request->detail_en,
										'detail_kh' => (($request->detail_kh)? $request->detail_kh : $request->detail_en),
										'detail_my' => (($request->detail_my)? $request->detail_my : $request->detail_en),
										'detail_sa' => (($request->detail_sa)? $request->detail_sa : $request->detail_en),
										'index' => $request->index,
										'status' => (($request->status==null)? 0 : 1),
										'category_id' => $request->category_id,
										'seo_keywords' => $request->seo_keywords,
										'seo_description' => $request->seo_description,
										'updated_by' => Auth::user()->id,
									]);
		// Redirect
		return redirect()->route('admin.slide_show.edit', $slide_show->id)
			->with('success', '<strong>' .$slide_show->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
	}

	public function update_image(Request $request, SlideShow $slide_show)
	{
		if ($request->file('image')) {

			$path = $this->path;
			if (!file_exists($path)) {
					mkdir($path, 666, true);
			}

			File::delete($path .'/thumb_'.$slide_show->image);
			File::delete($path .'/'.$slide_show->image);

			$image = $request->file('image');
			$image_name = time() .'_'. $slide_show->id .'.png';
			$thumb = Image::make($image->getRealPath())->resize(800, 422)->save($path.'thumb_'. $image_name);
			$img = Image::make($image->getRealPath())->resize(2800, 1500)->save($path.$image_name);
			$slide_show->update(['image' => $image_name]);
		}
		// Redirect
		return redirect()->route('admin.slide_show.index', $slide_show->id)
			->with('success', '<strong>' .$slide_show->name_en . '</strong> ' . __('alert.crud.success.update', ['name' => Auth::user()->module()]));
	}
	
	public function destroy(SlideShow $slide_show)
	{

		$path = $this->path. $slide_show->id .'/';
		$name = $slide_show->name_en;
		$thumbnail = $slide_show->thumbnail;

		if ($slide_show->delete()){
			File::deleteDirectory($path);
			// Redirect
			return redirect()->route('admin.slide_show.index')
				->with('success', '<strong>' . $name . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
		}
	}
}
