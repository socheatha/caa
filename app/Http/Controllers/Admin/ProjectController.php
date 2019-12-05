<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use Auth;
use Image;
use File;

class ProjectController extends Controller
{
	
	public function index()
	{
		// dd('');
		$this->data = [
			'projects' => Project::orderBy('index', 'asc')->get(),
		];
	
		return view('admin.project.index', $this->data);
	}

	
	public function create()
	{
		$project_categories = ProjectCategory::getSelectData('index', 'asc', 'id', 'name_en');
		$index = Project::sortIndex();
		return view('admin.project.create')->with(compact('index', 'project_categories'));
	}

	
	public function store(ProjectRequest $request)
	{
		// dd($request->all());


		if ($request->file('thumbnail')) {

			$project = Project::create([
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

			$path = public_path().'/images/projects/'. $project->id .'/';
			if (!file_exists($path)) {
					mkdir($path, 666, true);
			}
			$image = $request->file('thumbnail');
			$thumbnail = time() .'_'. $project->id .'.png';
			$thumb = Image::make($image->getRealPath())->resize(260, 180)->save($path.'thumb_'. $thumbnail);
			$img = Image::make($image->getRealPath())->resize(1000, 690)->save($path.$thumbnail);
			$project->update(['thumbnail' => $thumbnail]);
		}

		// Redirect
		return redirect()->route('admin.project.index')
			->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
	}

	
	public function show(Project $project)
	{
		//
	}

	
	public function edit(Project $project)
	{
		$project_categories = ProjectCategory::getSelectData('index', 'asc', 'id', 'name_en');
		return view('admin.project.edit')->with(compact('project_categories','project'));
	}

	
	public function update(ProjectRequest $request, Project $project)
	{
		$project->update([
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
		return redirect()->route('admin.project.edit', $project->id)
			->with('success', '<strong>' .$project->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
	}

	
	public function destroy(Project $project)
	{

		$path = public_path().'/images/projects/'. $project->id;
		$name = $project->name_en;

		if ($project->delete()){
			File::delete($path);
			// Redirect
			return redirect()->route('admin.project.index')
				->with('success', '<strong>' . $name . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
		}
	}
}
