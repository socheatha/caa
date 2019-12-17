<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\BaseModel;

class Config extends BaseModel
{
	protected $table = 'config';

	protected $fillable = ['logo','title_en','title_kh','title_my','title_sa','keyword','description_en','description_kh','description_my','description_sa','email','phone','address','copyright','social','fb_url','map_location','welcome_message','header_color','footer_color','body_color','menu_active_color','text_color','created_by','updated_by'];


	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
