<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumeImage extends Model
{
    protected $guarded = [];
    protected $table = 'albume_img';
    public $timestamps = false;
    
    
    public function albume()
    {
        return $this->belongsTo(Albume::class,'albume_id');
    }
}
