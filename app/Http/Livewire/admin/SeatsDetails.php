<?php

namespace App\Http\Livewire\Admin;

use App\Models\FlightDetails;
use App\Models\TicketDetails;
use Livewire\Component;

class SeatsDetails extends Component
{ 
    // static $initialSeats;
    // public function mount(){
    //     $this->initialSeats = FlightDetails::select('seats')->get();
    // }
    public function render()
    {
       
        $seats= FlightDetails::all();
        return view('livewire.admin.seats-details',['seats'=>$seats])->layout('layouts.dashboard');
    }
}
