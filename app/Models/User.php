<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\MainMenu;
use App\Models\Partner;
use Route;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'profile', 'gender','phone','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];





	public function sidebarActive(){

		$routename = explode('.', Route::currentRouteName());
		if (count($routename) > 4) {

			return $routename[3];

		}else if (count($routename) > 3) {

			return $routename[2];

		}else if (count($routename) > 2) {

			return $routename[1];

		}else{

			return $routename[0];

		}

	}


	public function module()
	{

		$routename = explode('.', Route::currentRouteName());
		if (count($routename) > 4) {

			return __('label.routename.' . $routename[3]);

		}else if (count($routename) > 3) {

			return __('label.routename.' . $routename[2]);

		}else if (count($routename) > 2) {

			return __('label.routename.' . $routename[1]);

		}else{

			return __('label.routename.' . $routename[0]);

		}

	}

	public function subModule()
	{

		$routename = explode('.', Route::currentRouteName());
        $name = '';
        
		if ( count($routename) > 3 ) {
			$name = $routename[3];
		}else if ( count($routename) > 2 ) {
			$name = $routename[2];
		}else{
			$name = $routename[1];
		}
		
		if ($name == 'index') {
			$name = __('label.content.header.index') . $this->module();
		}else if ($name == 'create') {
			$name = __('label.content.header.create') . $this->module();
		}else if ($name == 'edit') {
			$name = __('label.content.header.edit') . $this->module();
		}else if ($name == 'image') {
			$name = __('label.content.header.image') . $this->module();
		}else if ($name == 'year') {
			$name = __('label.content.header.index') . $this->module();
		}else if ($name == 'show') {
			$name = __('label.content.header.show') . $this->module();
		}else if ($name == 'monthYear') {
			$name = __('label.content.header.monthYear') . $this->module();
		}else if ($name == 'list') {
			$name = __('label.content.header.list') . $this->module();
		}else if ($name == 'client_qb_account') {
			$name = __('label.content.header.client_qb_account') . $this->module();
		}else if ($name == 'add_account_client') {
			$name = __('label.content.header.add_account_client') . $this->module();
		}else if ($name == 'create_account_in_add') {
			$name = __('label.content.header.create_account_in_add') . $this->module();
		}else if ($name == 'create_account_client') {
			$name = __('label.content.header.create_account_client') . $this->module();

		}else if ($name == 'client_qb_item') {
			$name = __('label.content.header.client_qb_item') . $this->module();
		}else if ($name == 'add_item_client') {
			$name = __('label.content.header.add_item_client') . $this->module();
		}else if ($name == 'create_item_in_add') {
			$name = __('label.content.header.create_item_in_add') . $this->module();
		}else if ($name == 'create_item_client') {
			$name = __('label.content.header.create_item_client') . $this->module();
			
		}else if ($name == 'home') {
			$name = '';
		}else{

		}

		return $name;
	}

	public function breadCrumb()
	{

		$routename = explode('.', Route::currentRouteName());

		$i = 0;
		$li = '';
		$active = '';
		foreach ($routename as $key => $value) {

			// GET First
		  if ( ++$i === count($routename) ) {

		  	// Last Active
				if ($value == 'index') {
					$active .= __('label.breadcrumb.crud.index');
				}else if ($value == 'create') {
					$active .= __('label.breadcrumb.crud.create');
				}else if ($value == 'edit') {
					$active .= __('label.breadcrumb.crud.edit');
				}else if ($value == 'image') {
					$active .= __('label.breadcrumb.crud.image');
				}else{
					$active .= __('label.breadcrumb.routename.'. $value);
				}

				$li .= '<li class="active">'. $active .'</li>';

		  } else if( $key === 0 ) {

		  	// Firtst Home
				if ($value == 'admin') {
					$li .= '<li><a href="'. route('admin.home') .'"><i class="fa fa-user-shield"></i> '. __('label.breadcrumb.routename.'. $value) .'</a></li>';
				}else{
					$li .= '<li><a href="'. route('admin'.$value.'.index') .'">'. __('label.breadcrumb.routename.'. $value) .'</a></li>';
				}

		  }else if ( count($routename) > 3) {
		  	// if length 3 Level deep
				$li .= '<li><a href="'. route('admin.'.$routename[1].'.'.$routename[2].'.index') .'">'. __('label.breadcrumb.routename.'. $value) .'</a></li>';
		  }else if ( count($routename) > 4) {
		  	// if length 4 Level deep
				$li .= '<li><a href="'. route('admin.'.$routename[1].'.'.$routename[2].'.'.$routename[3].'.index') .'">'. __('label.breadcrumb.routename.'. $value) .'</a></li>';
		  }else{
		  	// if length normal crud
				$li .= '<li><a href="'. route('admin.'.$value.'.index') .'">'. __('label.breadcrumb.routename.'. $value) .'</a></li>';
		  }
		  // End if

		}
		// End Foreach

		return $li;

	}

	// public function isPAdmin() {
	//    return $this->role()->where('id', '1')->exists();
	// }
	
	// public function isAdminLvl1() {
	//    return $this->role()->where('id', '3')->exists();
	// }

}
