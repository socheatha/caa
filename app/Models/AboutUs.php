<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\BaseModel;

class AboutUs extends BaseModel
{
	public $table = "about_us";

	protected $fillable = [
		'name_en',
		'name_kh',
		'name_my',
		'name_sa',
		'detail_en',
		'detail_kh',
		'detail_my',
		'detail_sa',
		'index',
		'seo_keywords',
		'seo_description',
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
