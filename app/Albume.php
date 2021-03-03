<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albume extends Model
{
    protected $guarded = [];
    protected $table = 'albumes';
    public $timestamps = false;
    

    public function imgs()
    {
        return $this->hasMany(AlbumeImage::class,'albume_id');
    }
}
