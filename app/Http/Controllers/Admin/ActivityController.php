<?php

namespace App\Http\Controllers\Admin;

use App\Models\Activity;
use App\Models\ActivityCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActivityStoreRequest;
use App\Http\Requests\ActivityUpdateRequest;
use App\Http\Requests\ActivityImageRequest;
use Auth;
use Image;
use File;

class ActivityController extends Controller
{
	protected $path;

	public function __construct()
	{
		$this->path = public_path().'/images/activities/';
	}
	
	public function index()
	{
		$this->data = [
			'activities' => Activity::orderBy('index', 'desc')->get(),
		];
	
		return view('admin.activity.index', $this->data);
	}

	
	public function create()
	{
		$activity_categories = ActivityCategory::getSelectData('index', 'asc', 'id', 'name_en');
		$index = Activity::sortIndex();
		return view('admin.activity.create')->with(compact('index', 'activity_categories'));
	}

	
	public function store(ActivityStoreRequest $request)
	{

		if ($request->file('thumbnail')) {

			$activity = Activity::create([
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
															'thumbnail' => 'null',
															'created_by' => Auth::user()->id,
															'updated_by' => Auth::user()->id,
														]);

			$path = $this->path;
			if (!file_exists($path)) {
					mkdir($path, 666, true);
			}
			$image = $request->file('thumbnail');
			$thumbnail = time() .'_'. $activity->id .'.png';
			$thumb = Image::make($image->getRealPath())->resize(260, 180)->save($path.'thumb_'. $thumbnail);
			$img = Image::make($image->getRealPath())->resize(1000, 690)->save($path.$thumbnail);
			$activity->update(['thumbnail' => $thumbnail]);
		}

		// Redirect
		return redirect()->route('admin.activity.index')
			->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
	}

	
	public function show(Activity $activity)
	{
		//
	}

	public function edit(Activity $activity)
	{
		$activity_categories = ActivityCategory::getSelectData('index', 'asc', 'id', 'name_en');
		return view('admin.activity.edit')->with(compact('activity_categories','activity'));
	}

	public function update(ActivityUpdateRequest $request, Activity $activity)
	{
		$activity->update([
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
		return redirect()->route('admin.activity.edit', $activity->id)
			->with('success', '<strong>' .$activity->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
	}

	public function update_image(ActivityImageRequest $request, Activity $activity)
	{
		if ($request->file('thumbnail')) {

			$path = $this->path;
			if (!file_exists($path)) {
					mkdir($path, 666, true);
			}

			File::delete($path .'/thumb_'.$activity->thumbnail);
			File::delete($path .'/'.$activity->thumbnail);

			$image = $request->file('thumbnail');
			$thumbnail = time() .'_'. $activity->id .'.png';
			$thumb = Image::make($image->getRealPath())->resize(260, 180)->save($path.'thumb_'. $thumbnail);
			$img = Image::make($image->getRealPath())->resize(1000, 690)->save($path.$thumbnail);
			$activity->update(['thumbnail' => $thumbnail]);
		}
		// Redirect
		return redirect()->route('admin.activity.index')
			->with('success', '<strong>' .$activity->name_en . '</strong> ' . __('alert.crud.success.update', ['name' => Auth::user()->module()]));
	}
	
	public function destroy(Activity $activity)
	{

		$name = $activity->name_en;
		$thumbnail = $activity->thumbnail;

		if ($activity->delete()){
			// Redirect
			return redirect()->route('admin.activity.index')
				->with('success', '<strong>' . $name . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
		}
	}
}
