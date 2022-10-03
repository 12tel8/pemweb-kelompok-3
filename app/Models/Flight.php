<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FlightBooking;

class Flight extends Model
{
    use HasFactory;

    protected $attributes = [
        'status' => 0,
        'refund' => false
    ];

    protected $fillable = [
           'airline_name',
           'plane_id',
           'plane_name',
           'from_location',
           'to_location',
           'departure_time',
           'arrival_time',
           'seat_class',
           'seats',
           'price',
           'discount',
    ];

    public function booking(){
        return $this->hasMany(FlightBooking::class);
    }
}
