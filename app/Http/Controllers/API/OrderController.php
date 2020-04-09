<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Http\Resources\OrderResource;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        return OrderResource::collection(
            Order::where('user_id',Auth::id())->paginate(3)
        );
    }
    public function show($id)
    {
        $order = Order::find($id);
        
        if($order)
            return new OrderResource($order);
        return ["error"=>"order not found"];
    }
}
