<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\PasswordUserRequest;
use App\Http\Requests\ImageUserRequest;
use Auth;
use Image;
use Hash;

class UserController extends Controller
{
    
    public function index()
    {
        $this->data = [
            'users' => User::orderBy('name','asc')->get(),
        ];

        return view('admin.user.index', $this->data);
    }



    public function create()
    {
        $this->data = [
        ];

        return view('admin.user.create', $this->data);
    }



    public function store(UserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
        ]);
        
        // Redirect
        return redirect()->route('admin.user.index')
            ->with('success', __('alert.crud.success.create', ['name' => Auth::user()->module()]));
    }



    public function show(User $user)
    {
        $this->data = [
            'user' => $user,
        ];
        
        return view('admin.user.show', $this->data);
    }



    public function edit(User $user)
    {
        $this->data = [
            'user' => $user,
        ];
        
        return view('admin.user.edit', $this->data);
    }



    public function update(EditUserRequest $request, User $user)
    {
        $user->update(request(['name', 'phone', 'gender']));
        // Redirect
        return redirect()->route('admin.user.edit', $user->id)
            ->with('success', __('alert.crud.success.update', ['name' => Auth::user()->module()]));
    }


    public function updateInfo(EditUserRequest $request, User $user)
    {

        $user->update(request(['name', 'phone', 'gender']));

        // Redirect
        return redirect()->route('admin.user.show', $user->id)
            ->with('success', __('alert.crud.success.update', ['name' => Auth::user()->module()]));
    }

    public function updateImage(ImageUserRequest $request, User $user)
    {
        // Define Upload Image Path
        $path = public_path().'/images/users/';

		if ($request->file('image')) {
			$image = $request->file('image');
            $user_image = (($user->profile!='default_user.png')? $user->profile : time() .'_'. $user->id .'.png');
			$img = Image::make($image->getRealPath())->save($path.$user_image);
			// crop image
			// $img->crop(100, 100, 25, 25);
            $user->update(['profile'=>$user_image]);
            
            // Redirect
            return redirect()->route('admin.user.show', $user->id)
                ->with('success', __('alert.crud.success.update', ['name' => Auth::user()->module()]));
        }
    }

    public function updatePassword(PasswordUserRequest $request, User $user)
    {

        if (Hash::check($request->current_password, Auth::user()->password)){
			$user->update(['password' => Hash::make($request->password)]);
            // Redirect
            return redirect()->route('admin.user.show', $user->id)
                ->with('success', __('alert.crud.success.update', ['name' => Auth::user()->module()]));
        }else{

            // Redirect
            return redirect()->back()->with('error', 'The password you have enter is wrong!');
		}
    }



    public function destroy(Request $request, User $user)
    {
        if (Hash::check($request->passwordDelete, Auth::user()->password)){
            if($user->delete()){
                // Redirect
                return redirect()->route('admin.user.index')
                    ->with('success', __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
            }
        }else{
            // Redirect
            return redirect()->back()->with('error', 'The password you have enter is wrong!');
		}
    }


    public function password_confirm(Request $request)
    {

        if (Hash::check($request->password_confirm, Auth::user()->password)){
            echo true;
        }else{
            echo false;
        }
    }

}
