<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\BaseModel;

class SlideShow extends BaseModel
{
	protected $table = 'slide_show';

	protected $fillable = ['name','short_desc','detail','image','index','created_by','updated_by'];



	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
