<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifcation extends Model
{
    //

    public function user()
    {
    	return $this->hasOne('App\User','id','addby');
    }
}
