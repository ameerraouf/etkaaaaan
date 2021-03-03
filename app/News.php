<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //

    public function files()
    {
    	return $this->hasMany('App\Files','news_id','id');
    }

    public function department()
    {
    	return $this->hasOne('App\Department','id','department');
    }
}
