<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crush extends Model
{

	public function quality()
	{
		
		return $this->hasMany('App\Quality');
	}
}
