<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubMenu;
use App\Models\SubSubMenu;
use App\Http\Requests\SubSubMenuRequest;
use Auth;

class SubSubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data = [
            'sub_sub_menus' => SubSubMenu::orderBy('index', 'asc')->get(),
        ];
        return view('admin.sub_sub_menu.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sub_sub_menus = SubMenu::getSelectData('index', 'asc', 'id', 'name_en');
        $index = SubSubMenu::sortIndex();
        return view('admin.sub_sub_menu.create')->with(compact('index','sub_sub_menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubSubMenuRequest $request)
    {
        $sub_sub_menu = SubSubMenu::create([
            'name_en' => $request->name_en,
            'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
            'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
            'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
            'url' => $request->url,
            'index' => $request->index,
            'status' => (($request->status==null)? 0 : 1),
            'sub_menu_id' => $request->sub_menu_id,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);
        // Redirect
        return redirect()->route('admin.sub_sub_menu.index')
        ->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSubMenu $sub_subMenu)
    {
        $sub_sub_menus = SubMenu::getSelectData('index', 'asc', 'id', 'name_en');
        return view('admin.sub_sub_menu.edit')->with(compact('sub_sub_menus','sub_subMenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subsubMenu->update([
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
        return redirect()->route('admin.sub_menu.edit', $subsubMenu->id)
        ->with('success', '<strong>' .$subsubMenu->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $name = $subMenu->name_en;
		if ($subMenu->delete()){
            // Redirect
            return redirect()->route('admin.sub_menu.index')
                ->with('success', '<strong>' . $subMenu->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
        }
    }
}
