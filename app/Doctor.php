<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pharmacy;

class Doctor extends Model
{
    protected $fillable = ["name", "email", "password", "national_id", "avatar_image", "is_baned", "pharmacy_id"];

    protected $hidden = ["password"];

    public function pharmacy() {
        return $this->belongsTo('App\Pharmacy');
    }
}
