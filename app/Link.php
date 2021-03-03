<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public function links(){
        return $this->hasMany(Link::class,'parent','id');
    }
}
