<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'user_id',
        'doctor_id',
        'is_isured',
        'creator_type',
        'status',
        'pharmacy_id',
        'price'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
