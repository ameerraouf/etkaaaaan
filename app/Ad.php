<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    // ads Model 
    
    protected $table = 'ads';

    protected $guarded = [];

   public $timestamps = false;

    
}
