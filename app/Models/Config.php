<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Config extends Model
{
	protected $table = 'config';

	protected $fillable = ['logo','email','phone','address','copyright','social','fb_url','map_location','welcome_message','header_color','footer_color','body_color','menu_active_color','text_color','created_by','updated_by'];


	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
