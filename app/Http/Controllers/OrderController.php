<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Doctor;
use App\Pharmacy;
use App\Medicine;
use App\Address;
use App\medicine_orders;

class OrderController extends Controller
{
    //
    public function index(){
        $order = Order::find(1);

        //$medicine=$order->medicine;	
        //dd($order->medicine[0]->name);
     

        

    
        $orders=Order::all();
        return view('orders/index',[
            'orders'=>$orders
        ]);
    }
    public function show(){
        $request = request();
        $orderId = $request->order;

        $userId=$request->user;
        // $medicineId=$request->medicine;


        $order=Order::find($orderId);
         $user=User::find($userId);

        //  $medicine=Medicine::find($medicineId);

        return view('orders/show',[
            'order'=>$order,
             'user'=>$user,
            //  'medicine'=>$medicine
        ]);



        $order=Order::find($orderId);
        return view('orders/show',[
            'order'=>$order

        ]);
        
    }
    public function destroy(){
        $request = request();
       
        $orderId = $request->order;
        dd($orderId);
        Order::destroy($orderId);
      
        return redirect()->route('orders.index');

    }
    public function create(){
         $users = User::all();
         $addresses = Address::all();
         $doctors = Doctor::all();
         $pharmacys = Pharmacy::all();
         $medicines = Medicine::all();
       
       
         return view('orders/create',['users'=>$users,'medicines'=>$medicines,'doctors'=>$doctors,
         'pharmacys'=>$pharmacys,'addresses'=>$addresses]);
    
    }
    public function store(){
        $request=request();
    

       
       

        $orders=Order::create([

            "user_id"=> $request->user_id,
            "doctor_id"=> $request->doctor_id,
            "is_isured"=>$request->is_isured,
            "creator_type"=>$request->creator_type,
            "status"=>$request->status,
            "pharmacy_id"=>$request->pharmacy_id ,
            'delivering_address_id'=>$request->deliviring_address  
        ]);
        $request['order_id']=$orders->id;
        $medicine=Medicine::find($request->medicine_id);
        
        $ord=medicine_orders::create([
            'order_id'=>$request->order_id,
            'medicine_id'=>$request->medicine_id,
            'price'=>$medicine->price*$request->quantity,
            'quantity'=>$request->quantity
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
