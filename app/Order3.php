<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order3 extends Model
{
    //

    public function user()
    {
    	return $this->hasOne('App\User','id','user_id');
    }
}
