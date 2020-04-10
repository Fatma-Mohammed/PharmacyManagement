<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Pharmacy extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'national_id',
        'avatar_image',
        'priority',
        'area_id',
    ];

    protected $hidden = ["password", "deleted_at"];

    public function doctors()
    {
        return $this->hasMany('App\Doctor');
    }

    public function area()
    {
         return $this->belongsTo('App\Area');
    } 
    public function medicines()
    {  
        return $this->belongsToMany(Medicine::class,'medicine_pharmacies')->withTimestamps();
    }

}
