<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyVideo extends Model
{
    protected $fillable =['title','video_name','category_id'];
}
