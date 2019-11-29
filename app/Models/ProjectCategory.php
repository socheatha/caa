<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Project;
use App\Models\BaseModel;

class ProjectCategory extends BaseModel
{
	protected $table = 'project_category';

	protected $fillable = ['name','color','index','created_by','updated_by'];


	public function Project(){
		return $this->hasMany(Project::class,'category_id');
	}
	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
