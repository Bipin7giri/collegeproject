<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketDetails extends Model
{
    use HasFactory;
    protected $table ="ticket_details";
    protected $fillable=['firstname','middlename','flight_details_id','lastname','phone_no','card_name','card_no','payment_type','address','email','citizen_number'];
    
    public function users()
    {
        return $this->belongsTo(User::class);
        
    }
    public function flightDetils()
    {
        return $this->belongsTo(FlightDetails::class);
    }
}
