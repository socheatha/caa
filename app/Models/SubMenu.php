<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\MainMenu;

class SubMenu extends Model
{
	protected $table = 'sub_menu';

	protected $fillable = ['name','url','index','status','main_menu_id','created_by','updated_by'];


	public function MainMenu(){
		return $this->belongsTo(MainMenu::class,'main_menu_id');
	}
	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
