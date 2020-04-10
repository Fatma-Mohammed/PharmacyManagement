<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Address;
use App\Http\Requests\StoreAddressRequest;
use Illuminate\Support\Facades\Auth;


class UserAddressController extends Controller
{
    public function index()
    {
        

        return  Address::all();
    }
    public function show()
    {
        $request = request();
        $addressId = $request->useraddress;
        // $userId=$request->user;

        $useraddress = Address::find($addressId);
    
        return  $useraddress;

    }

    public function store(StoreAddressRequest $request)
    {
       return Address::create([
           
            'area_id' => $request->area_id,
            'street_name' => $request->street_name,
            'building_number' => $request->building_number,
            'floor_number' => $request->floor_number,
            'flat_number' => $request->flat_number,
            'is_main' => $request->is_main,
            'user_id' => Auth::id(),
        ]);
       
    }

    // public function update()
    // {
    //     $request = request();
    
    //     $useraddress = UserAddress::find($request->useraddress);
    //     $useraddress->area_id = $request->area_id;
    //     $useraddress->street_name = $request->street_name;
    //     $useraddress->building_number = $request->building_number;
    //     $useraddress->floor_number = $request->floor_number;
    //     $useraddress->falt_number = $request->falt_number;
    //     $useraddress->is_main = $request->is_main;

    //     $useraddress->save();
    //     return $useraddress;

    // }



    // public function destroy()
    // {
    //     $request = request();
    //     $addressId = $request->useraddress;

    //     // $post = Post::find($postId);

    //     // $post->delete();
    //     UserAddress::destroy($addressId);

    //     return  UserAddress::all();

    // }


}
