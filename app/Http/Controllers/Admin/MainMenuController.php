<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\MainMenu;
use App\Models\MainMenuTranslation;
use App\Http\Requests\MainMenuRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MainMenuController extends Controller
{
    
    public function index()
    {
        $main_menus = MainMenu::orderBy('index', 'asc')->get();
        return view('admin.main_menu.index')->with(compact('main_menus'));
    }

    
    public function create()
    {
        $index = MainMenu::sortIndex();
        return view('admin.main_menu.create')->with(compact('index'));
    }
    
    public function store(MainMenuRequest $request)
    {
        $main_menu = MainMenu::create([
                                        'name_en' => $request->name_en,
                                        'name_kh' => (($request->name_kh)? $request->name_kh : $request->name_en),
                                        'name_my' => (($request->name_my)? $request->name_my : $request->name_en),
                                        'name_sa' => (($request->name_sa)? $request->name_sa : $request->name_en),
                                        'url' => $request->url,
                                        'index' => $request->index,
                                        'status' => (($request->status==null)? 0 : 1),
                                        'created_by' => Auth::user()->id,
                                        'updated_by' => Auth::user()->id,
                                        ]);
        // Redirect
        return redirect()->route('admin.main_menu.index')
            ->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
    }

    
    public function show(MainMenu $mainMenu)
    {
        //
    }

    
    public function edit(MainMenu $mainMenu)
    {
        return view('admin.main_menu.edit')->with(compact('mainMenu'));
    }

    
    public function update(MainMenuRequest $request, MainMenu $mainMenu)
    {
        $mainMenu->update([
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
        return redirect()->route('admin.main_menu.edit', $mainMenu->id)
            ->with('success', '<strong>' .$mainMenu->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));

    }

    public function destroy(MainMenu $mainMenu)
    {
        $name = $mainMenu->name_en;
		if ($mainMenu->delete()){
            // Redirect
            return redirect()->route('admin.main_menu.index')
                ->with('success', '<strong>' . $mainMenu->name_en . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
        }
    }
}
