<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubMenu;
use App\Models\MainMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubMenuRequest;
use Auth;

class SubMenuController extends Controller
{
    
    public function index()
    {
        $this->data = [
            'sub_menus' => subMenu::orderBy('index', 'asc')->get(),
        ];
    
        return view('admin.sub_menu.index', $this->data);
    }

    
    public function create()
    {
        $main_menus = MainMenu::getSelectData('index', 'asc', 'id', 'name_en');
        $index = subMenu::sortIndex();
        return view('admin.sub_menu.create')->with(compact('index', 'main_menus'));
    }

    
    public function store(SubMenuRequest $request)
    {
        $sub_menu = SubMenu::create([
                                    'name_en' => $request->name_en,
                                    'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
                                    'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
                                    'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
                                    'url' => $request->url,
                                    'index' => $request->index,
                                    'status' => (($request->status==null)? 0 : 1),
                                    'main_menu_id' => $request->main_menu_id,
                                    'created_by' => Auth::user()->id,
                                    'updated_by' => Auth::user()->id,
                                ]);
        // Redirect
        return redirect()->route('admin.sub_menu.index')
            ->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
    }

    
    public function show(SubMenu $subMenu)
    {
        //
    }

    
    public function edit(SubMenu $subMenu)
    {
        $main_menus = MainMenu::getSelectData('index', 'asc', 'id', 'name_en');
        return view('admin.sub_menu.edit')->with(compact('main_menus','subMenu'));
    }

    
    public function update(SubMenuRequest $request, SubMenu $subMenu)
    {
        $subMenu->update([
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
        return redirect()->route('admin.sub_menu.edit', $subMenu->id)
            ->with('success', '<strong>' .$subMenu->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
    }

    
    public function destroy(SubMenu $subMenu)
    {
        $name = $subMenu->name_en;
		if ($subMenu->delete()){
            // Redirect
            return redirect()->route('admin.sub_menu.index')
                ->with('success', '<strong>' . $subMenu->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
        }
    }
}
