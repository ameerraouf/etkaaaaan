<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    public function country()
    {
    	return $this->hasOne('App\Country','id','country_id');
    }

    public function city()
    {
    	return $this->hasMany('App\City','area_id','id');
    }

    public function section()
    {
    	return $this->hasMany('App\Section','area_id','id');
    }
}
