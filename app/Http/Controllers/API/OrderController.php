<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Pharmacy;
use App\Address;
use App\Http\Resources\OrderResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ApiStoreOrderRequest;
use App\Http\Requests\ApiUpdateOrderRequest;

use Illuminate\Database\Eloquent\Builder;
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

    public function store(ApiStoreOrderRequest $request)
    {
        $order = $request->only(['is_isured','delivering_address_id']);
        $order['user_id']=Auth::id();
        $order['creator_type']="user";
        $order["status"]='New';
        $area = Address::find($order['delivering_address_id'])->area->id;
        $priority = Pharmacy::where('area_id',$area)->max('priority');
        $pharmacy = Pharmacy::where('priority',$priority)->first();
        
        $order['pharmacy_id'] = $pharmacy->id ;
        $order=Order::create($order);

        if($request->hasFile('prescriptions'))
            $order->prescriptions = $request->file('prescriptions');

        return ["success"=>"your order was made"];
    }

    public function update(ApiUpdateOrderRequest $request, $id)
    {
        
        $order = Order::find($id);
        if(!$order)
            return ["error"=>"resource not found"];

        if($order->status!="New")
            return ["error"=>"can't update that order as it's not in new status"];
        
                
        if($request->hasFile('prescriptions'))
            $order->prescriptions = $request->file('prescriptions'); 
    
        if($request->has('cancel'))
            if($request->cancel==1){
                $order->status_id=3;
                $order->save();
            }


        $order->status = "New";
        $order->created_at = $request->created_at;
        $order->pharmacy_id = $order->pharmacy_id;
        $order->total_price = $request->total_price;

        $order->save();
              
        
        return ["success"=>"your order has been updated sucessfully"];
    }

}
