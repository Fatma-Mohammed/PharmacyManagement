<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_medicine extends Model
{
    //
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
    public function medicine()
    {
        return $this->belongsTo('App\Medicine');
    }
}
