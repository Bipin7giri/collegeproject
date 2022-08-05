<?php

namespace App\Http\Livewire;

use App\Models\FlightDetails;
use Livewire\Component;
use Livewire\WithPagination;
class ViewTickets extends Component
{
    use WithPagination;
    public $search, $priceCompare, $date, $to, $from,$allDetails,$seats;
  
    protected $queryString = ['search','to','from','date'];
  

    public function mount(){
        $prices = FlightDetails::select('price')->get();
        $seats = FlightDetails::select('seats')->get();
     

        foreach($prices as $p){
        $price= $p->price;
        }
        foreach($seats as $s){
         $seat = $s->seats;
        }
         //    $this->priceCompare=$prices;    
        
        if($seat<=5){
         $this->priceCompare=$price+2000;
        }
        elseif($seat<=10){
         $this->priceCompare=$price+1000;
        }
        elseif($seat<=15){
         $this->priceCompare=$price+500;
         
        }
        else{
         $this->priceCompare;
        }
 }
        
    
    public function render()
    {
        
        $froms = FlightDetails ::select('from')->distinct()->get();
        $tos = FlightDetails::select('to')->distinct()->get();  
        // dd($froms);
            $flightDetails = FlightDetails::where('arrival_date', '>=', date('Y-m-d'))->when($this->search,function($q){
                return $q->where('flight_name','like','%'.$this->search.'%');
                
            })->when($this->from,function($q){
                return $q->where('from',$this->from);
                     
            })->when($this->to,function($q){
                return $q->where('to',$this->to);
                     
            })->when($this->date,function($q){
                return $q->where('departure_date',$this->date);
            })->paginate(5);
                               
        return view('livewire.view-tickets',["flightDetails"=>$flightDetails,"froms"=>$froms,"tos"=>$tos]);
    }
}
