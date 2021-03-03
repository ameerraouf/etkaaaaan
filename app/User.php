<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function group()
    {
        return $this->hasOne('App\UsersGroup','id','user_id');
    }

    public function admin()
    {
        return $this->hasOne('App\Admin','id','group_id');
    }
    
    public function country()
    {
        return $this->hasOne('App\Country','id','country');
    }
 
    public function step1()
    {
        return $this->hasOne('App\Order','user_id','id');
    }

    public function step2()
    {
        return $this->hasOne('App\Order2','user_id','id');
    }

     public function step3()
    {
        return $this->hasMany('App\Order3','user_id','id');
    }
}
