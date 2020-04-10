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

}
