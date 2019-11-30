<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Language;
use App\Models\User;

class BaseModel extends Model
{

	protected $table = 'language';

	protected $fillable = ['language','nationality','detail','index','status','created_by','updated_by'];
  
  public function AllLanguages()
  {
    return Language::where('status', '1')->orderBy('index', 'asc')->get();
  }

}
