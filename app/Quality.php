<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Quality extends Model
{
	
	public function crush()
	{
		
		return $this->belongsToMany('App\Crush');
	}
	
}
