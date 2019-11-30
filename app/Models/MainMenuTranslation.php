<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\MainMenu;

class MainMenuTranslation extends Model
{
	protected $table = 'main_menu_translation';

	protected $fillable = ['name','language','main_menu_id','created_by','updated_by'];

	public function MainMenu(){
		return $this->hasMany(MainMenu::class,'main_menu_id');
	}
	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
