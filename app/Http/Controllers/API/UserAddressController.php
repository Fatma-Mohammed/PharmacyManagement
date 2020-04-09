<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserAddress;

class UserAddressController extends Controller
{
    public function index()
    {
        

        return  UserAddress::all();
    }
    public function show()
    {
        $request = request();
        $addressId = $request->useraddress;
        // $userId=$request->user;

        $useraddress = UserAddress::find($addressId);
    
        return  $useraddress;

    }

    public function store(Request $request)
    {
        $request = request();
       return UserAddress::create([
            'area_id' => $request->area_id,
            'street_name' => $request->street_name,
            'building_number' => $request->building_number,
            'floor_number' => $request->floor_number,
            'falt_number' => $request->falt_number,
            'is_main' => $request->is_main,
        ]);
       
    }

    public function update()
    {
        $request = request();
    
        $useraddress = UserAddress::find($request->useraddress);
        $useraddress->area_id = $request->area_id;
        $useraddress->street_name = $request->street_name;
        $useraddress->building_number = $request->building_number;
        $useraddress->floor_number = $request->floor_number;
        $useraddress->falt_number = $request->falt_number;
        $useraddress->is_main = $request->is_main;

        $useraddress->save();
        return $useraddress;

    }



    public function destroy()
    {
        $request = request();
        $addressId = $request->useraddress;

        // $post = Post::find($postId);

        // $post->delete();
        UserAddress::destroy($addressId);

        return  UserAddress::all();

    }


}
