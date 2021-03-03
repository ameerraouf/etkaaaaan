<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailList extends Model
{
    //

    public function admin()
    {
    	return $this->hasOne('App\User','id','admin_id');
    }
}
