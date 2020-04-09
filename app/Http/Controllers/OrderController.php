<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Medicine;

class OrderController extends Controller
{
    //
    public function index(){
        $order = Order::find(1);
        
    
        $orders=Order::all();
        return view('orders/index',[
            'orders'=>$orders
        ]);
    }
    public function show(){
        $request = request();
        $orderId = $request->order;



        $order=Order::find($orderId);
        return view('orders/show',[
            'order'=>$order
        ]);
        
    }
    public function destroy(){
        $request = request();
        $orderId = $request->order;


        Order::destroy($orderId);

        return redirect()->route('orders.index');

    }
    public function create(){
         $users = User::all();
         $medicines = Medicine::all();
       
       
         return view('orders/create',['users'=>$users,'medicines'=>$medicines ]);
    
    }
    public function store(){
        $request=request();
    
        Order::create([
            "user_id"=> $request->user_id,
            "doctor_id"=> $request->doctor_id,
            "is_isured"=>$request->is_isured,
            "creator_type"=>$request->creator_type,
            "status"=>$request->status,
            "pharmacy_id"=>$request->pharmacy_id,
            'price'=>$request->doctor_id*$request->user_id

        ]);
       
        return redirect()->route('orders.index');
    }
    public function edit(){
        $request = request();
        $orderId = $request->order;
        $order=Order::find($orderId);
        return view('orders/edit',[
            'order'=>$order
        ]);
    }
    public function update(){
       $request=request();
        $order = Order::find($request->id);
        $order->user_id= $request->user_id;
        $order->doctor_id= $request->doctor_id;
        $order->is_isured=$request->is_isured;
        $order->creator_type=$request->creator_type;
        $order->status=$request->status;
        $order->pharmacy_id=$request->pharmacy_id;

        $order->save();
        return redirect()->route('orders.index');

    }
}
