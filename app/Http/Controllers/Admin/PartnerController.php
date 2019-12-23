<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use File;

class PartnerController extends Controller
{
	

	protected $path;

	public function __construct()
	{
		$this->path = public_path().'/images/partners/';
	}
	
	public function index()
	{
		$this->data = [
			'partners' => Partner::orderBy('index', 'asc')->get(),
		];
	
		return view('admin.partner.index', $this->data);
	}

	
	public function create()
	{
		$index = Partner::sortIndex();
		return view('admin.partner.create')->with(compact('index'));
	}

	
	public function store(Request $request)
	{
		if ($request->file('thumbnail')) {

			$partner = Partner::create([
															'index' => $request->index,
															'url' => $request->url,
															'status' => (($request->status==null)? 0 : 1),
															'thumbnail' => 'null',
															'created_by' => Auth::user()->id,
															'updated_by' => Auth::user()->id,
														]);

			$path = $this->path;
			$image = $request->file('thumbnail');
			$image_name = time() .'_'. $partner->id .'.png';
			$thumb = Image::make($image->getRealPath())->resize(150, 150)->save($path.'thumb_'. $image_name);
			$img = Image::make($image->getRealPath())->resize(230, 230)->save($path.$image_name);
			$partner->update(['thumbnail' => $image_name]);
		}

		// Redirect
		return redirect()->route('admin.partner.index')
			->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
	}

	
	public function show(Partner $partner)
	{
		//
	}

	
	public function edit(Partner $partner)
	{
		return view('admin.partner.edit')->with(compact('partner'));
	}

	
	public function update(Request $request, Partner $partner)
	{
		if ($request->file('thumbnail')) {

			$path = $this->path;

			File::delete($path .'/thumb_'.$partner->thumbnail);
			File::delete($path .'/'.$partner->thumbnail);

			$image = $request->file('thumbnail');
			$image_name = time() .'_'. $partner->id .'.png';
			$thumb = Image::make($image->getRealPath())->resize(150, 150)->save($path.'thumb_'. $image_name);
			$img = Image::make($image->getRealPath())->resize(230, 230)->save($path.$image_name);

			$partner->update([
												'index' => $request->index,
												'url' => $request->url,
												'status' => (($request->status==null)? 0 : 1),
												'thumbnail' => $image_name,
												'updated_by' => Auth::user()->id,
											]);
		}else{
			$partner->update([
															'index' => $request->index,
															'url' => $request->url,
															'status' => (($request->status==null)? 0 : 1),
															'updated_by' => Auth::user()->id,
														]);
		}

		// Redirect
		return redirect()->route('admin.partner.edit', $partner->id)
			->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
	}

	
	public function destroy(Partner $partner)
	{

		$path = $this->path;
		$thumbnail = $partner->thumbnail;

		if ($partner->delete()){

			File::delete($path .'/thumb_'.$partner->thumbnail);
			File::delete($path .'/'.$partner->thumbnail);
			
			// Redirect
			return redirect()->route('admin.partner.index')
				->with('success', __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
		}
	}
}
