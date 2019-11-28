<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ProjectCategory;

class Project extends Model
{
	protected $table = 'project';

	protected $fillable = ['name','detail','short_descript','thumbnail','view','index','status','category_id','created_by','updated_by'];


	public function ProjectCategory(){
		return $this->hasMany(ProjectCategory::class,'category_id');
	}
	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
