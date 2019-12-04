<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectCategoryRequest;

class ProjectCategoryController extends Controller
{
	
	public function index()
	{
		$projectCategorys = ProjectCategory::orderBy('index', 'asc')->get();
		return view('admin.project_category.index')->with(compact('projectCategorys'));
	}

	
	public function create()
	{
		$index = ProjectCategory::sortIndex();
		return view('admin.project_category.create')->with(compact('index'));
	}

	
	public function store(ProjectCategoryRequest $request)
	{
		$main_menu = ProjectCategory::create([
																			'name_en' => $request->name_en,
																			'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
																			'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
																			'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
																			'url' => $request->url,
																			'index' => $request->index,
																			'status' => (($request->status==null)? 0 : 1),
																			'seo_keywords' => $request->seo_keywords,
																			'seo_description' => $request->seo_description,
																			'created_by' => Auth::user()->id,
																			'updated_by' => Auth::user()->id,
																			]);
		// Redirect
		return redirect()->route('admin.project_category.index')
			->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
	}

	
	public function show(ProjectCategory $projectCategory)
	{
		//
	}

	
	public function edit(ProjectCategory $projectCategory)
	{
		return view('admin.project_category.edit')->with(compact('projectCategory'));
	}

	
	public function update(Request $request, ProjectCategory $projectCategory)
	{
		$projectCategory->update([
						'name_en' => $request->name_en,
						'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
						'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
						'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
						'url' => $request->url,
						'index' => $request->index,
						'status' => (($request->status==null)? 0 : 1),
						'updated_by' => Auth::user()->id,
					]);
		// Redirect
		return redirect()->route('admin.project_category.edit', $projectCategory->id)
			->with('success', '<strong>' .$projectCategory->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
	}

	
	public function destroy(ProjectCategory $projectCategory)
	{
		$name = $projectCategory->name_en;
		if ($projectCategory->delete()){
			// Redirect
			return redirect()->route('admin.project_category.index')
				->with('success', '<strong>' . $projectCategory->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
		}
	}
}
