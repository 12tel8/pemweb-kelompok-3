<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Flight;

class FlightBooking extends Model
{
    use HasFactory;

    protected $fillable = [
            'flight_id',
            'name',
            'birth_date',
            'gender',
            'email',
            'phone_number',
            'group_length',
            'group_participant',
            'price',
            'discount',
            'total',
    ];


    public function flight(){
        return $this->belongsTo(Flight::class,'flight_id');
    }

}
