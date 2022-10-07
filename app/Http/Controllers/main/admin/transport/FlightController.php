<?php

namespace App\Http\Controllers\main\admin\transport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function create(){
        $flights = Flight::all();

        return view('pages.main.admin.transport.Flight',[
            'flights' => $flights
        ]);
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

        dd($create);
    }
}
