<?php

namespace App\Http\Controllers\Admin;

use App\Models\MainMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    
    public function store(Request $request)
    {
        //
    }

    
    public function show(MainMenu $mainMenu)
    {
        //
    }

    
    public function edit(MainMenu $mainMenu)
    {
        $this->data = [
            'main_menus' => MainMenu::orderBy('index', 'asc')->get(),
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
