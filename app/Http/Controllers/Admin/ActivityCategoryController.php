<?php

namespace App\Http\Controllers\Admin;

use App\Models\ActivityCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActivityCategoryRequest;
use Auth;

class ActivityCategoryController extends Controller
{
	public function index()
	{
		$activityCategorys = ActivityCategory::orderBy('index', 'asc')->get();
		return view('admin.activity_category.index')->with(compact('activityCategorys'));
	}

	
	public function create()
	{
		$index = ActivityCategory::sortIndex();
		return view('admin.activity_category.create')->with(compact('index'));
	}

	
	public function store(ActivityCategoryRequest $request)
	{
		$main_menu = ActivityCategory::create([
                                            'name_en' => $request->name_en,
                                            'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
                                            'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
                                            'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
                                            'color' => $request->color,
                                            'index' => $request->index,
                                            'seo_keywords' => $request->seo_keywords,
                                            'seo_description' => $request->seo_description,
                                            'created_by' => Auth::user()->id,
                                            'updated_by' => Auth::user()->id,
                                            ]);
		// Redirect
		return redirect()->route('admin.activity_category.index')
			->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
	}

	
	public function show(ActivityCategory $activityCategory)
	{
		//
	}

	
	public function edit(ActivityCategory $activityCategory)
	{
		return view('admin.activity_category.edit')->with(compact('activityCategory'));
	}

	
	public function update(Request $request, ActivityCategory $activityCategory)
	{
		$activityCategory->update([
                                'name_en' => $request->name_en,
                                'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
                                'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
                                'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
                                'color' => $request->color,
                                'index' => $request->index,
                                'seo_keywords' => $request->seo_keywords,
                                'seo_description' => $request->seo_description,
                                'updated_by' => Auth::user()->id,
                                ]);
		// Redirect
		return redirect()->route('admin.activity_category.edit', $activityCategory->id)
			->with('success', '<strong>' .$activityCategory->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
	}

	
	public function destroy(ActivityCategory $activityCategory)
	{
		$name = $activityCategory->name_en;
		if ($activityCategory->delete()){
			// Redirect
			return redirect()->route('admin.activity_category.index')
				->with('success', '<strong>' . $activityCategory->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
		}
	}
}
