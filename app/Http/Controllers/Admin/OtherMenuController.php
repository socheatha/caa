<?php

namespace App\Http\Controllers\Admin;

use App\Models\OtherMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtherMenuController extends Controller
{
    
    public function index()
    {
        $this->data = [
            'other_menus' => OtherMenu::orderBy('index', 'asc')->get(),
        ];
    
        return view('admin.other_menu.index', $this->data);
    }

    
    public function create()
    {
        return view('admin.other_menu.create');
    }

    
    public function store(Request $request)
    {
        //
    }


    public function show(OtherMenu $otherMenu)
    {
        //
    }

    
    public function edit(OtherMenu $otherMenu)
    {
        $this->data = [
            'other_menu' => $otherMenu,
        ];
    
        return view('admin.other_menu.edit', $this->data);
    }

    
    public function update(Request $request, OtherMenu $otherMenu)
    {
        //
    }

    
    public function destroy(OtherMenu $otherMenu)
    {
        //
    }
}
