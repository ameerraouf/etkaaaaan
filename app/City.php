<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    public function area()
    {
    	return $this->hasOne('App\Area','id','area_id');
    }

    public function country()
    {
    	return $this->hasOne('App\Country','id','country_id');
    }

    public function section()
    {
    	return $this->hasMany('App\Section','city_id','id');
    }
}
