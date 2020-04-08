<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;


class MedicineController extends Controller
{

    public function index ()
    {
    $medicines = Medicine::all();
     return view('medicines/index' , [
         'medicines' => $medicines,
     ]);
    }

    public function show()
    {
        // dd(Storage::files('storage'));

        $medicines = Medicine::all();
        $request = request();
        $medicineId = $request->medicine; 
        $medicine = Medicine::find($medicineId);
        return view('medicines/show', [
            'medicine' => $medicine
            ]);


    }

    public function create()
   {
    $medicines = Medicine::all();
    return view('medicines/create',[
        "medicines" => $medicines
    ]);
   }

   public function store(Request $request)
    {
       
        Medicine::create([
            'name' => $request->name,
            'price' => $request->price,
        ]); 
        return redirect()->route('medicine.index');

    }


    public function edit ()
    {
        $request = Request();
        $medicineId = $request->medicine; 
        $medicine = Medicine::find($medicineId);


        return view('medicines/edit',[
            'medicine' => $medicine,
        ]);
    }


    public function update()
    {
        
        $request = Request();
        $medicineId = $request->medicine; 
        $medicine = Medicine::find($medicineId);
     //    dd($request);
         $medicine ->update([
             'name' => $request->name,
             'price' => $request->price,
         ]);
         
         return redirect()->route('medicine.index');
 
    }
 

    public function destroy(){
        $request=request();
        $medicineId=$request->medicine;
        $medicine=Medicine::find($medicineId);
        $medicine->delete();
        return redirect()->route('medicine.index');
    }



}
