<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    /*
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'description',
        'image',
        'quantity',
        'price',
        'reorder_point',
    ];
    
    public function shop(){
        return $this->belongsTo(Shop::class,'id');
    }
    */
}
