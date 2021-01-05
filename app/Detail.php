<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Detail extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
        'total'    
    ];
}
