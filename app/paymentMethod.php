<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paymentMethod extends Model
{
    protected $fillable = [
        'name',
        'description',    
    ];
    public function order(){
        return $this->hasmany(Order::class);
    }
    
}
