<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order2 extends Model
{
    //
    protected $table = 'order2s';

    public function user(){
    	return $this->hasOne('App\User','id','user_id');
    }
}
