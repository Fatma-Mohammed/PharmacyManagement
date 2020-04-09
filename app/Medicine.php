<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable=[
        'name' , 'price'
    ];



    public function order()

    {

        return $this->belongsToMany(Order::class, 'order_medicine');

    }





}




