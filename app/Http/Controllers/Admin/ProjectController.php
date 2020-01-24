<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Http\Requests\ProjectImageRequest;
use Auth;
use Image;
use File;

class ProjectController extends Controller
{

	protected $path;

	public function __construct()
	{
		$this->path = public_path().'/images/projects/';
	}
	
	public function index()
	{
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

	
	public function store(ProjectStoreRequest $request)
	{

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

			$path = $this->path. $project->id .'/';
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

	public function update(ProjectUpdateRequest $request, Project $project)
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

	public function update_image(ProjectImageRequest $request, Project $project)
	{
		if ($request->file('thumbnail')) {

			$path = $this->path. $project->id .'/';
			if (!file_exists($path)) {
					mkdir($path, 666, true);
			}

			File::delete($path .'/thumb_'.$project->thumbnail);
			File::delete($path .'/'.$project->thumbnail);

			$image = $request->file('thumbnail');
			$thumbnail = time() .'_'. $project->id .'.png';
			$thumb = Image::make($image->getRealPath())->resize(260, 180)->save($path.'thumb_'. $thumbnail);
			$img = Image::make($image->getRealPath())->resize(1000, 690)->save($path.$thumbnail);
			$project->update(['thumbnail' => $thumbnail]);
		}
		// Redirect
		return redirect()->route('admin.project.index')
			->with('success', '<strong>' .$project->name_en . '</strong> ' . __('alert.crud.success.update', ['name' => Auth::user()->module()]));
	}
	
	public function destroy(Project $project)
	{

		$path = $this->path. $project->id .'/';
		$name = $project->name_en;
		$thumbnail = $project->thumbnail;

		if ($project->delete()){
			File::deleteDirectory($path);
			// Redirect
			return redirect()->route('admin.project.index')
				->with('success', '<strong>' . $name . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
		}
	}
}
