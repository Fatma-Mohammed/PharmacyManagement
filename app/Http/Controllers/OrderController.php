<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    //
    public function index(){
        $orders=Order::all();
        return view('index',[
            'orders'=>$orders
        ]);
    }
    public function show(){
        $request = request();
        $orderId = $request->order;
        // $userId=$request->user;



        $order=Order::find($orderId);
        // $user=Order::find($userId);
        return view('show',[
            'order'=>$order
            // 'user'=>$user
        ]);
        
    }
    public function destroy(){
        $request = request();
        $orderId = $request->order;

        // $post = Post::find($postId);

        // $post->delete();
        Order::destroy($orderId);

        return redirect()->route('orders.index');

    }
    public function create(){
         $users = User::all();
         
       
         return view('create',['users'=>$users]);
    
    }
    public function store(){
        $request=request();
    
    //    dd($request);
        Order::create([
            "user_id"=> $request->user_id,
            "doctor_id"=> $request->doctor_id,
            "is_isured"=>$request->is_isured,
            "creator_type"=>$request->creator_type,
            "status"=>$request->status,
            "pharmacy_id"=>$request->pharmacy_id

        ]);
       
        return redirect()->route('orders.index');
    }
    public function edit(){
        $request = request();
        $orderId = $request->order;
        $order=Order::find($orderId);
        return view('edit',[
            'order'=>$order
        ]);
    }
    public function update(){
       $request=request();
        // dd($request->id);
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
