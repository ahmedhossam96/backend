<?php

namespace App;



use Illuminate\Notifications\Notifiable;

use Tymon\JWTAuth\Contracts\JWTSubject;


use Illuminate\Foundation\Auth\User as Authenticatable;





use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Model;


class Shop extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $guard = 'shops';

    protected $fillable = [
        
        'name',
        'fname',
        'lname',
        'email',
        'address',
        'city',
        'country',
        'phone',
        'pid',
        'commercialregister',
        'password',
        'about',
        'image',
        
    ];

  
     
   

       public function getJWTIdentifier()
    {
        return $this->getKey();
    }

   
    public function getJWTCustomClaims()
    {
        return [];
    }




    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
