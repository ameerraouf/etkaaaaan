<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    
    public function areas()
    {
    	return $this->hasMany('App\Area','country_id','id');
    }

    public function city()
    {
    	return $this->hasMany('App\City','country_id','id');
    }

    public function section()
    {
    	return $this->hasMany('App\Section','country_id','id');
    }
}
