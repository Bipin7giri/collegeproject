<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightDetails extends Model
{
    use HasFactory;
    protected $table ="flight_details";
    protected $fillable=['flight_name','flight_id','arrival_date','to','from','departure_date','arrival_time','departure_time','seats'];
}
