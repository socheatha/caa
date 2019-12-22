<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
	protected $table = 'donations';

	protected $fillable = ['seo_keywords','	seo_description','detail_en','detail_kh','detail_sa'];

}
