<?php

namespace App\Http\Livewire;

use App\Models\FlightDetails;
use Livewire\Component;

class ViewTickets extends Component
{
    public $search;
    protected $queryString = ['search'];
    public function render()
    {
            // $flightDetails = FlightDetails::all();
            $flightDetails = FlightDetails::when($this->search,function($q){
                return $q->where('flight_name','like','%'.$this->search.'%')
                ->orwhere('to','like','%'.$this->search.'%')
                ->orwhere('from','like','%'.$this->search.'%')
                ->orwhere('price','like','%'.$this->search.'%');
                
            })->paginate(10);
         
        return view('livewire.view-tickets',["flightDetails"=>$flightDetails]);
    }
}
