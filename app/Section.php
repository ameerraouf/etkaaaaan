<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';

    public function country()
    {
    	return $this->hasOne('App\Country','id','country_id');
    }

    public function area()
    {
    	return $this->hasOne('App\Area','id','area_id');
    }

    public function city()
    {
    	return $this->hasOne('App\City','id','city_id');
    }
}
