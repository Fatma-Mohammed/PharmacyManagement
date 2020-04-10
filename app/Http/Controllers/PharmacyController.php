<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePharmacyRequest;
use App\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;


class PharmacyController extends Controller
{

    public function index()
    {
        if (request()->ajax())
            return Datatables::collection(Pharmacy::all())->make(true);

        return view('pharmacies.index');
    }

    public function create()
    {
        return view("pharmacies.create"); // TODO : send areas with them
    }


    public function store(StorePharmacyRequest $request)
    {

        if ($request->hasFile('avatar')) {
            // get filename with extension
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            // Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extnsion = $request->file('avatar')->getClientOriginalExtension();

            if (in_array(strtolower($extnsion), ['jpeg', 'jpg', 'png'])) { // not needed, already checked in Request
                // file to store
                $filenameToStore = $filename . '_' . time() . '.' . $extnsion;
                //upload img
                $path = $request->file('avatar')->storeAs('public', $filenameToStore);
            } else {
                $filenameToStore = 'default_avatar.jpg';
            }

        } else {
            $filenameToStore = 'default_avatar.jpg';
        }

        Pharmacy::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "national_id" => $request->national_id,
            "avatar_image" => $filenameToStore,
            "priority" => $request->priority,
            "area_id" => $request->area_id,
        ]);

        return redirect()->route('pharmacies.index')->with('result', "success");

    }


    public function show($id)
    {
        return view('pharmacies.show', ["pharmacy" => Pharmacy::find(1)]);
    }

    public function edit($id)
    {
        return view('pharmacies.show', ["pharmacy" => Pharmacy::find($id)]);
    }

    public function update(Request $request, $id)
    {
        //$post = Post::find(1);
        //$post->update([]);
    }

    public function destroy($id)
    {
        //When deleting a pharmacy make sure that it doesn’t have any
        //order assigned to it . and also make sure i can restore it Check Soft
        //Delete
        $pharmacy = Pharmacy::find($id)->delete();
        return redirect()->back();
    }
}
