<?php

namespace App\Http\Controllers\main\admin\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flight;
use Session;

Use Alert;

class FlightController extends Controller
{
    public function create(){
        $flights = Flight::all();
        
        return view('pages.main.admin.products.Flight', compact('flights'));
    }

    public function edit($id){
        $flight = Flight::find((int)$id); 

        Session::flash('flight',$flight);
        return redirect()->to(url()->previous() . '#edit/' . $id )->with('flight',$flight);
    }

    public function store(){
        $flights = [
           'airline_name' => request()->airline_name,
           'plane_id' => request()->plane_id,
           'plane_name' => request()->plane_name,
           'from_location' => request()->from_location,
           'to_location' => request()->to_location,
           'departure_time'=> request()->departure_time,
           'arrival_time' => request()->arrival_time,
           'seat_class'=> request()->seat_class,
           'seats'=> request()->seats,
           'price'=> request()->price,
           'discount'=> request()->discount,
        ];

        $create = Flight::create($flights);

        if(!$create){
            session()->flash('error', 'error');
            return redirect()->back();
        }
        session()->flash('success', 'success');
        return redirect()->back();

    }

    public function detail(){

    }
}
