<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $document=Document::orderBy('id', 'desc')->get();
        return view('admin.document.index')->with(['documents'=>$document,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('soft')) {
            $path = 'images/document/';
            $extension = Input::file('soft')->getClientOriginalExtension(); 
            $softname =  time().'caa_'.'_soft.'.$extension;
            Input::file('soft')->move($path, $softname);
            File::delete($path, $softname);
            $soft=$path.$softname;
			$document = Document::create([
                'name_en' => $request->name_en,
                'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
                'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
                'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
                'detail_en' => $request->detail_en,
                'detail_kh' => (($request->detail_kh)? $request->detail_kh : $request->detail_en),
                'detail_my' => (($request->detail_my)? $request->detail_my : $request->detail_en),
                'detail_sa' => (($request->detail_sa)? $request->detail_sa : $request->detail_en),
                'seo_keywords' => $request->seo_keywords,
                'seo_description' => $request->seo_description,
                'soft' => $soft,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);
        }
		// Redirect
		return redirect()->route('admin.documents.index')
			->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        return view('admin.document.edit')->with(compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $document->update([
            'name_en' => $request->name_en,
            'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
            'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
            'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
            'detail_en' => $request->detail_en,
            'detail_kh' => (($request->detail_kh)? $request->detail_kh : $request->detail_en),
            'detail_my' => (($request->detail_my)? $request->detail_my : $request->detail_en),
            'detail_sa' => (($request->detail_sa)? $request->detail_sa : $request->detail_en),
            'seo_keywords' => $request->seo_keywords,
            'seo_description' => $request->seo_description,
            'updated_by' => Auth::user()->id,
        ]);
        // Redirect
        return redirect()->route('admin.documents.index', $document->id)
        ->with('success', '<strong>' .$document->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
		$name = $document->name_en;
		$soft = $document->soft;

		if ($document->delete()){

			File::delete($document->soft);
			File::delete($document->soft);

			// Redirect
			return redirect()->route('admin.documents.index', $document->id)
				->with('success', '<strong>' . $name . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
		}
    }
}
