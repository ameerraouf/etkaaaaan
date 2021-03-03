<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplayContact extends Model
{
    //
	protected $table = 'replay_contacts';

	public function user(){
		return $this->hasOne('App\User','id','user_id');
	}
}
