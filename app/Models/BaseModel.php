<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Language;
use App\Models\User;

class BaseModel extends Model
{

	public function StatusIcon($status){
		return (($status==1)? '<i class="fa fa-check-circle text-green"></i>' : '<i class="fa fa-minus-circle text-red"></i>' );
	}
	

	public static function sortIndex()
	{
			$row = parent::orderBy('index', 'desc')->first();

			$index = ((isset($row->index))? $row->index + 1 : 1);

			return $index;
	}

	public static function getSelectData($orderby = 'created_at', $sort = 'asc', $field_1 = 'id', $field_2 = 'name_en')
	{
			$collection = parent::orderBy($orderby, $sort)->get();

			return self::getItems($collection, $field_1, $field_2);
	}

	public static function getItems($collection, $field_1, $field_2)
	{
			$items = [];

			foreach ($collection as $model) {
					$items[$model->$field_1] = $model->$field_2;
			}
			return $items;
	}
  
}
