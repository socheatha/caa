<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('admin.sub_menu.create');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(SubMenu $subMenu)
    {
        //
    }

    
    public function edit(SubMenu $subMenu)
    {
        $this->data = [
            'sub_menu' => $subMenu,
        ];
    
        return view('admin.sub_menu.edit', $this->data);
    }

    
    public function update(Request $request, SubMenu $subMenu)
    {
        //
    }

    
    public function destroy(SubMenu $subMenu)
    {
        //
    }
}
