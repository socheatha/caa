<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class Language extends Model
{
	protected $table = 'language';

	protected $fillable = ['language','nationality','detail','index','status','created_by','updated_by'];


	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
