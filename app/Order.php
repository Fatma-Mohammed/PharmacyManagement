<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pharmacy;
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
        'delivering_address_id',
        
    ];
    static public $statuses =[
        'New',
        'Processing',
        'WaitingForUserConfirmation',
        'Canceled',
        'Confirmed',
        'Delivered'

    ];
    public function user()
    {

        return $this->belongsTo('App\User');   

    }
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');   
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
        $pharmacy= Pharmacy::find($this->pharmacy_id);
        $pharmacy['address']=$pharmacy->area->name.", ".$pharmacy->area->address;
        return $pharmacy;
    }
    public function medicine()

    {

        return $this->belongsToMany(Medicine::class, 'order_medicine');

    }
}
