<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Activity;

class ActivityCategory extends Model
{
	protected $table = 'activity_category';

	protected $fillable = ['name','color','index','created_by','updated_by'];


	public function Activity(){
		return $this->hasMany(Activity::class,'category_id');
	}
	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
