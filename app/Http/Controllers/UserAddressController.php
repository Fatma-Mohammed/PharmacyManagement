<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAddress;


class UserAddressController extends Controller
{
    public function index()
    {
        $userAddresses = UserAddress::all();

        return view('useraddresses.index', [
            'userAddresses' => $userAddresses,
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
        $addressId = $request->userAddress;
        // $userId=$request->user;

        $address = UserAddress::find($addressId);
        // $user=Order::find($userId);
        return view('useraddresses.show', [
            'address' => $address,
            // 'user'=>$user
        ]);

    }

    public function edit()
    {
        $request = request();
        $addressId = $request->userAddress;
        $order = UserAddress::find($addressId);
        return view('useraddresses.edit', [
            'address' => $address,
        ]);
    }

    public function update()
    {
        $request = request();
        // dd($request->id);
        $address = UserAddress::find($request->id);
        $address->area_id = $request->area_id;
        $address->street_name = $request->street_name;
        $address->building_number = $request->building_number;
        $address->floor_number = $request->floor_number;
        $address->falt_number = $request->falt_number;
        $address->is_main = $request->is_main;

        $address->save();
        return redirect()->route('useraddresses.index');

    }

    public function destroy()
    {
        $request = request();
        $addressId = $request->userAddress;

        // $post = Post::find($postId);

        // $post->delete();
        Order::destroy($addressId);

        return redirect()->route('useraddresses.index');

    }
}
