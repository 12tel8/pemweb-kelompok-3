<?php

namespace App\Http\Controllers\main\admin\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flight;
use Session;

Use Alert;

class FlightController extends Controller
{
    public function main(){
        $flights = Flight::all();
        
        return view('pages.main.admin.products.flight.Flight', compact('flights'));
    }

    public function edit($id){
        $flight = Flight::find((int)$id); 

        return view('pages.main.admin.products.flight.Flight-edit', compact('flight'));
    }

    public function delete($id){
        return redirect()->to(url()->previous() . '#delete/' . $id )->with('id',$id);
    }

    public function destroy($id){
        $flight = Flight::find((int)$id)->delete();

        if(!$flight){
            return back()->with('error','flight data failed to delete');
        }
        return back()->with('success','flight data deleted successfully');
    }

    public function update($id){
        $flight = Flight::find((int)$id);

        $attributes = request()->validate([
            'airline_name'       => ['required'],
            'plane_id'           => ['required'],
            'plane_name'         => ['required'],
            'from_location'      => ['required'],
            'to_location'        => ['required'],
            'departure_time'     => ['required'],
            'arrival_time'       => ['required'],
            'seat_class'         => ['required'],
            'seats'              => ['required'],
            'price'              => ['required'],
            'discount'           => ['required']
         ]);

         $update = $flight->update($attributes);

         if(!$update){
            return redirect()->to('flight')->with('error','data failed to edit');
        }
        return redirect()->to('flight')->with('success','data edited successfully');


    }

    public function create(){
        return view('pages.main.admin.products.flight.Flight-form');
    }

    public function store(){
        $attributes = request()->validate([
           'airline_name'       => ['required'],
           'plane_id'           => ['required'],
           'plane_name'         => ['required'],
           'from_location'      => ['required'],
           'to_location'        => ['required'],
           'departure_time'     => ['required'],
           'arrival_time'       => ['required'],
           'seat_class'         => ['required'],
           'seats'              => ['required'],
           'price'              => ['required'],
           'discount'           => ['required']
        ]);

        $create = Flight::create($attributes);

        if(!$create){
            return redirect()->to('flight')->with('error','data failed to add');
        }
        return redirect()->to('flight')->with('success','data added successfully');

    }

    public function detail(){

    }
}
