<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\SubMenu;
use App\Models\MainMenuTranslation;
use App\Models\BaseModel;

class MainMenu extends BaseModel
{
	protected $table = 'main_menu';

	protected $fillable = ['url','index','status','created_by','updated_by'];

	public function translation($lang){
		return $this->hasMany(MainMenuTranslation::class,'main_menu_id')->where('language', $lang)->first();
	}
	public function SubMenu(){
		return $this->hasMany(SubMenu::class,'main_menu_id');
	}
	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
