<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\BaseModel;

class Config extends BaseModel
{
	protected $table = 'config';

	protected $fillable = [
		'logo',
		'title_en',
		'title_kh',
		'title_my',
		'title_sa',
		'keyword',
		'description_en',
		'description_kh',
		'description_my',
		'description_sa',
		'email',
		'instagram_url',
		'fb_url',
		'tw_url',
		'linkedin_url',
		'map_location',
		'phone_en',
		'phone_kh',
		'phone_my',
		'phone_sa',
		'address_en',
		'address_kh',
		'address_my',
		'address_sa',
		'copyright_en',
		'copyright_kh',
		'copyright_my',
		'copyright_sa',
		'welcome_message_en',
		'welcome_message_kh',
		'welcome_message_my',
		'welcome_message_sa',
		'header_color',
		'footer_color',
		'body_color',
		'menu_active_color',
		'text_color',
		'sidebar_right',
		'language_en',
		'language_kh',
		'language_my',
		'language_sa',
		'created_by',
		'updated_by'
	];


	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
