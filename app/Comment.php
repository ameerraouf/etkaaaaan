<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    public function news()
    {
    	return $this->hasMany('App\News','id','news_id');
    }

    public function user()
    {
    	return $this->hasMany('App\User','id','user_id');
    }
}