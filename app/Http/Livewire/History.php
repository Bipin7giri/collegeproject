<?php

namespace App\Http\Livewire;

use App\Models\FlightDetails;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class History extends Component
{
    public $userTicketHistory, $FlightDetails;
    

    public function mount()
    {
     $this->userTicketHistory=Auth::user()->ticket()->get();
     
    }
    public function render()
    {
       
        return view('livewire.history',['userTicketHistory'=>$this->userTicketHistory]);
    }
}
