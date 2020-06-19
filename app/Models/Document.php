<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\BaseModel;

class Document extends BaseModel
{
	protected $table = 'document';

	protected $fillable = [
		'name_en',
		'name_kh',
		'name_my',
		'name_sa',
		'seo_keywords',
		'seo_description',
		'soft',
		'created_by',
		'updated_by'];


	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
