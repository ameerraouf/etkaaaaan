<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
	protected $table = 'banners';
    public function user()
    {
    	return $this->hasOne('App\User','id','user_id');
    }
}
