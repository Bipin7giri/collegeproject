<?php

namespace App\Http\Livewire;

use App\Models\FlightDetails;
use Livewire\Component;

class ViewTickets extends Component
{
    public $search, $date, $to, $from,$allDetails;
  
    protected $queryString = ['search','to','from','date'];

    // public function all()
    // {
    //     $this->allDetails = FlightDetails::all();
    //     dd($this->allDetails);
    // }
    
    public function render()
    {
        
        $froms = FlightDetails ::select('from')->distinct()->get();
        $tos = FlightDetails::select('to')->distinct()->get();  
            $flightDetails = FlightDetails::when($this->search,function($q){
                return $q->where('flight_name','like','%'.$this->search.'%');
                
            })->when($this->from,function($q){
                return $q->where('from',$this->from);
                     
            })->when($this->to,function($q){
                return $q->where('to',$this->to);
                     
            })->when($this->date,function($q){
                return $q->where('departure_date',$this->date);
            })->paginate(10);
                               
        return view('livewire.view-tickets',["flightDetails"=>$flightDetails,"froms"=>$froms,"tos"=>$tos]);
    }
}
