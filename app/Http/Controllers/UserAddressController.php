<?php

namespace App\Http\Controllers;

use App\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    public function index()
    {
        $useraddresses = UserAddress::all();

        return view('useraddresses.index', [
            'useraddresses' => $useraddresses,
        ]);
    }

    public function create()
    {
        return view('useraddresses.create');

    }

    public function store(Request $request)
    {
        $request = request();
        UserAddress::create([
            'area_id' => $request->area_id,
            'street_name' => $request->street_name,
            'building_number' => $request->building_number,
            'floor_number' => $request->floor_number,
            'falt_number' => $request->falt_number,
            'is_main' => $request->is_main,
        ]);
        return redirect()->route('useraddresses.index');
    }

    public function show()
    {
        $request = request();
        $addressId = $request->useraddress;
        // $userId=$request->user;

        $useraddress = UserAddress::find($addressId);
        // $user=Order::find($userId);
        return view('useraddresses.show', [
            'useraddress' => $useraddress,
            // 'user'=>$user
        ]);

    }

    public function edit()
    {
        $request = request();
        $addressId = $request->useraddress;
        $useraddress = UserAddress::find($addressId);
        return view('useraddresses.edit', [
            'useraddress' => $useraddress,
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
        return redirect()->route('useraddresses.index');

    }

    public function destroy()
    {
        $request = request();
        $addressId = $request->useraddress;

        // $post = Post::find($postId);

        // $post->delete();
        UserAddress::destroy($addressId);

        return redirect()->route('useraddresses.index');

    }
}
