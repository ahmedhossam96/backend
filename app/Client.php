<?php
 namespace App;

 use\Illuminate\Database\Eloquent\Model;
 use\Illuminate\Foundation\Auth\User;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use\Illuminate\Support\Facades\Hash;

 class Client extends User
 {
     protected $fillable = [
         'id',
         'name',
         'email',
         'password'
     ];

     public function order()
    {
        return $this->hasmany(Order::class);
    }
    
     public function setPasswordAttribute($palinPassword){
         $this ->attributes['password'] = Hash::make($palinPassword);
     }
 }
