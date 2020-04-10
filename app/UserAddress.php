<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'area_id',
        'street_name',
        'building_number',
        'floor_number',
        'falt_number',
        'is_main'
    ];
}
