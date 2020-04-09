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
        'assigned_pharmacy',
        'delivering_address_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User','order_user_id');
    }
    public function medicines()
    {

        return $this->belongsToMany(Medicine::class, 'medicine_orders')->withPivot(['price', 'quantity'])->withTimestamps();
    }

    public function pharmacy()
    {
        return $this->belongsTo('App\Pharmacy');
    }
    public function address()
    {
        return $this->belongsTo('App\Address','delivering_address_id');
    }
    

    public function getCompleteMedicinesAttribute(){
        $medicines=[];
        foreach($this->medicines as $medicine){
            $medicine["quantity"]=$medicine->pivot->quantity;
            $medicine["price"] = $medicine->pivot->price;
            $medicines[]=$medicine;
        }
        return $medicines;
    }

    public function getPharmacyAttribute()
    {
        $pharmacy= Pharmacy::find($this->pharamcy_id);   
        $pharmacy['address']=$pharmacy->area->name.", ".$pharmacy->area->address;
        return $pharmacy;
    }
}
