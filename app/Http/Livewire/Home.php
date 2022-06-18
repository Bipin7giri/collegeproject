<?php

namespace App\Http\Livewire;

use App\Models\Alert;
use App\Models\FlightDetails;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $flightDetails = FlightDetails::all();
        $messages = Alert::all();
        return view('livewire.home',["flightDetails"=>$flightDetails,"messages"=>$messages]);
    }
}
