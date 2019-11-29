<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ActivityCategory;
use App\Models\BaseModel;

class Activity extends BaseModel
{
	protected $table = 'activity';

	protected $fillable = ['name','color','index','category_id','created_by','updated_by'];


	public function ActivityCategory(){
		return $this->hasMany(ActivityCategory::class,'category_id');
	}
	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
