<?php

namespace App\Http\Livewire\Admin;

use App\Models\TicketDetails;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Stats extends Component
{
    public $usersData,$name=[],$count=[], $flightData,$flightName=[],$fCount=[],$totalSales,$users,$totalTickets;

    public function mount(){
        $this->usersData = TicketDetails::select(DB::raw('user_id'),DB::raw('name'),DB::raw('count(*) as total'))
         ->join("users","users.id","=","ticket_details.user_id")
        ->groupBy('user_id')
        ->groupBy('name')
        ->take(7)
        ->get();
 
        foreach ($this->usersData as $u)
        {
       $this->name[]= $u->name;

       $this->count[]=$u->total;
        }  
        $this->flightData = TicketDetails::select(DB::raw('flight_details_id'),DB::raw('flight_id'),DB::raw('count(*) as total'))
        ->join("flight_details","flight_details.id","=","ticket_details.flight_details_id")
       ->groupBy('flight_details_id')
       ->groupBy('flight_id')
       ->take(7)
       ->get();

       foreach ($this->flightData as $f)
       {
      $this->flightName[]= $f->flight_id;

      $this->fCount[]=$f->total;
       }  
       $this->totalSales= TicketDetails::sum('fare');
       $this->users= DB::table('users')->where('type','user')->count();  
        

       $this->totalTickets = TicketDetails::count();
      
    }

    public function render()
    {
        return view('livewire.admin.stats')->layout('layouts.dashboard');
    }
}
