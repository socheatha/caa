<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\MainMenu;
use App\Models\BaseModel;

class SubMenu extends BaseModel
{
	protected $table = 'sub_menu';

	protected $fillable = ['name_en',
													'name_kh',
													'name_my',
													'name_sa',
													'url',
													'index',
													'status',
													'main_menu_id',
													'created_by','updated_by'];


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
