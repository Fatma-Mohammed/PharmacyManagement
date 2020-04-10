<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicine_orders extends Model
{
    //
    protected $fillable = [
        'order_id',
        'medicine_id',
        'price',
        'quantity',
        
    ];
}
