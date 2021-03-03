<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['name', 'content','active'];
    
    public function files()
    {
        return $this->hasMany(PageFile::class,'page_id');
    }
}
