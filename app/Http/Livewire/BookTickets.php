<?php

namespace App\Http\Livewire;

use App\Models\FlightDetails;
use Livewire\Component;

class BookTickets extends Component
{
    public $flight_id;
    public function mount($flight_id)
    {
        $this->flight_id= $flight_id;
    }
    public function render()
    {
        $flightDetails = FlightDetails::find($this->flight_id);
        return view('livewire.book-tickets',['flightDetails'=>$flightDetails]);
    }
}
