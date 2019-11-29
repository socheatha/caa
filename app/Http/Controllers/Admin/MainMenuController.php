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
        
        $validator = \Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:225'],
            'email' => ['required', 'email', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'password_confirmation' => ['min:6', 'same:password'],
            'gender' => ['required'],
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()]);
        }

        return response()->json(['success'=>'success', 'member' => $member->create($request)]);

        return Client::create([
                    'name' => $request->name,
                    'name_en' => $request->name_en,
                    'owner_name' => $request->owner_name,
                    'language' => $request->language,
                    'vat_tin' => $request->vat_tin,
                    'tax_type_id' => $request->tax_type_id,
                    'business_objective_id' => $request->business_objective_id,
                    'controlled_by' => $request->controlled_by,
                    'merge' => (($request->merge==null)? 0 : 1),
                    'quickbook' => (($request->quickbook==null)? 0 : 1),
                    'inv_digit' => $request->inv_digit,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'address' => $request->address,
                    'house' => $request->house,
                    'street' => $request->street,
                    'group' => $request->group,
                    'village' => $request->village,
                    'commune' => $request->commune,
                    'district_id' => $request->district_id,
                    'province_id' => $request->province_id,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
        ]);
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
