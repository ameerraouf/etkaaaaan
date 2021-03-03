<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //

    public function comment()
    {
    	return $this->hasMany('App\Comment','id','comment_id');
    }
    public function news()
    {
    	return $this->hasMany('App\News','id','news_id');
    }
    public function user()
    {
    	return $this->hasMany('App\User','id','user_id');
    }

    public function to_user()
    {
        return $this->hasMany('App\User','id','to_user_id');
    }

    
}
