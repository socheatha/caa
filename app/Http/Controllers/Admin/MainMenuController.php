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
        // $this->data = [
        //     'main_menus' => MainMenu::orderBy('index', 'asc')->get(),
        // ];
        $main_menus = MainMenu::orderBy('index', 'asc')->get();
        
        return view('admin.main_menu.index')->with(compact('main_menus'));
    }

    
    public function create()
    {
        return view('admin.main_menu.create');
    }
    
    public function store(MainMenuRequest $request)
    {
        // return $request->all();
        $languages = Language::where('status', '1')->orderBy('index', 'asc')->get();

        $main_menu = MainMenu::create([
                                        'url' => $request->url,
                                        'index' => $request->index,
                                        'status' => $request->status,
                                        'created_by' => Auth::user()->id,
                                        'updated_by' => Auth::user()->id,
                                        ]);

        foreach ($languages as $key => $lang) {
            MainMenuTranslation::create([
                            'name' => $request->name,
                            'language' => $lang->nationality,
                            'main_menu_id' => $main_menu->id,
                            'created_by' => Auth::user()->id,
                            'updated_by' => Auth::user()->id,
                            ]);
        }

        // Redirect
        return redirect()->route('admin.main-menu.index')
            ->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
    }

    
    public function show(MainMenu $mainMenu)
    {
        //
    }

    
    public function edit(Request $request, MainMenu $mainMenu, $lang)
    {
        // return $mainMenu;
        return view('admin.main_menu.edit')->with(compact('mainMenu','lang'));
    }

    
    public function update(Request $request, MainMenu $mainMenu)
    {
        
        $mainMenu->update([
                        'url' => $request->url,
                        'index' => $request->index,
                        'status' => $request->status,
                        'updated_by' => Auth::user()->id,
                    ]);

        $mainMenuTranslation = $mainMenu->translation($request->language)
                                        ->update([
                                            'name' => $request->name,
                                            'updated_by' => Auth::user()->id
                                        ]);
        // Redirect
        return redirect()->route('admin.main-menu.edit', [$mainMenu->id, $request->language])
            ->with('success', '<strong>' .$mainMenu->translation($request->language)->name . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));

    }

    
    public function destroy(MainMenu $mainMenu)
    {
        $name = $mainMenu->translation('en')->name;
		if ($mainMenu->delete()){
            // Redirect
            return redirect()->route('admin.main-menu.index')
                ->with('success', '<strong>' .$mainMenu->translation('en')->name . '</strong> ' . __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
        }
    }
}
