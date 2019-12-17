<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Activity;
use App\Models\BaseModel;

class ActivityCategory extends BaseModel
{
	protected $table = 'activity_category';

	protected $fillable = [	'seo_keywords',
													'seo_description',
													'name_en',
													'name_kh',
													'name_my',
													'name_sa',
													'color',
													'index',
													'created_by','updated_by'];



	public function Activities(){
		return $this->hasMany(Activity::class,'category_id');
	}
	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
