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
        $this->data = [
            'main_menus' => MainMenu::orderBy('index', 'asc')->get(),
        ];
    
        return view('admin.main_menu.index', $this->data);
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

    
    public function edit(MainMenu $mainMenu)
    {
        $this->data = [
            'main_menu' => $mainMenu,
        ];
    
        return view('admin.main_menu.edit', $this->data);
    }

    
    public function update(Request $request, MainMenu $mainMenu)
    {
        //
    }

    
    public function destroy(MainMenu $mainMenu)
    {
        //
    }
}
