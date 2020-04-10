<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $fillable = ["name", "email", "password", "national_id", "avatar_image", "priority", "area_id"];

    protected $hidden = ["password", "deleted_at"];

    public function doctors()
    {
        return $this->hasMany('App\Doctor');
    }

}
