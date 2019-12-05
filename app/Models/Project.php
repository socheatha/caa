<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ProjectCategory;
use App\Models\BaseModel;

class Project extends BaseModel
{
	protected $table = 'project';

	protected $fillable = [	'seo_keywords',
													'seo_description',
													'name_en',
													'name_kh',
													'name_my',
													'name_sa',
													'detail_en',
													'detail_kh',
													'detail_my',
													'detail_sa',
													'short_descript_en',
													'short_descript_kh',
													'short_descript_my',
													'short_descript_sa',
													'thumbnail',
													'view',
													'index',
													'status',
													'category_id',
													'created_by',
													'updated_by'];


	public function ProjectCategory(){
		return $this->belongsTo(ProjectCategory::class,'category_id');
	}
	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
