<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class OtherMenu extends Model
{
	protected $table = 'other_menu';

	protected $fillable = ['name','url','index','status','created_by','updated_by'];


	public function CreatedBy(){
		return $this->belongsTo(User::class,'created_by');
	}
	public function UpdatedBy(){
		return $this->belongsTo(User::class,'updated_by');
	}
}
