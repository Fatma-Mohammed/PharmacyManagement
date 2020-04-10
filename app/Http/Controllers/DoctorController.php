<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{

    public function index()
    {
        return view('doctors.index', ["doctors" => Doctor::all()]);
    }


    public function create()
    {
        return view('doctors.create', ["pharmacies" => Pharmacy::all()]);
    }

    public function store(StoreDoctorRequest $request)
    {
        Doctor::create([
            "name" => request()->name,
            "email" => request()->email,
            'password' => Hash::make(request()->password),
            "national_id" => request()->national_id,
            "avatar_image" => request()->avatar_image,
            "is_baned" => request()->is_baned,
            "pharmacy_id" => request()->pharmacy_id
        ]);

        return redirect('doctors.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->back();
    }
}
