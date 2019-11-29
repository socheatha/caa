<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\BaseModel;

class Document extends BaseModel
{
	protected $table = 'document';

	protected $fillable = ['name','soft','detail','created_by','updated_by'];


	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
