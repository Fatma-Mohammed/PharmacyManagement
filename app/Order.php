<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'user',
        'doctor',
        'is_isured',
        'creator_type',
        'status',
        'assigned_pharmacy'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
