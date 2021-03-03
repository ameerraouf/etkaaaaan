<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
	protected $table ='contacts';

	public function replay()
	{
		return $this->hasMany('App\ReplayContact','message_id','id');
	}

	public function user()
	{
		return $this->hasMany('App\User','id','user_id');
	}
}
