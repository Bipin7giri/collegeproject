<?php

namespace App\Http\Livewire;

use App\Models\FlightDetails;
use App\Models\TicketDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BookTickets extends Component
{
    public $flight_id,$flightName,$fare, $ticketID, $name, $firstname, $validate, $lastname, $phone_no, $middlename, $address, $email, $citizen_number,$card_name,$payment_type, $card_no;
    public function mount($flight_id)
    {
        $this->flight_id= $flight_id;
        $this->name=Auth::user();
        $flightName = FlightDetails::select('*')->where('id',$this->flight_id)->get();
        foreach($flightName as $name){
           $this->flightName= $name->flight_name;
        }
        $this->ticketID = $this->flightName.$this->flight_id.rand();
   
        // @if($flightDetails->seats<=5)
        // {{$flightDetails->price+1500}}
        // @elseif($flightDetails->seats<=10)
        // {{$flightDetails->price+1000}}
        // @elseif($flightDetails->seats<=15)
        // {{$flightDetails->price+500}}
        // @else
        // {{$flightDetails->price}}
        // @endif
        $seats = FlightDetails::select('seats')-> where('id',$this->flight_id)->get();
        $prices = FlightDetails::select('price')->where('id',$this->flight_id)->get();
        $count = TicketDetails::select(DB::raw('count(*) as total'))
       ->groupBy('user_id')
       ->get();
      
   
        foreach($count as $c){
            $t=$c->total;
        }

        foreach($prices as $p){
            $price= $p->price;
        }
        foreach($seats as $s){
           $seats= $s->seats;
        }
        if($t>=5){
            $this->fare = $price-500;
        }

        // dd($price);
       if($seats<=5){
        $this->fare= $price+1500;

       }
       elseif($seats<=10){
        $this->fare = $price+1000;
       }
       elseif($seats<=15){
        $this->fare = $price+500;
      
       }
       else{
        $this->fare = $price;
        
       }
    }
      
    public function bookNow($id)
    {
        
        $this->validate([
            "firstname" => "required", 
            "lastname"=>"required",
            "phone_no"=>"required|min:10|max:10",
            "address"=>"required|alpha",
            "email"=>"required|email",
            "citizen_number"=>"required",
            "card_no"=>"required",
            "card_name"=>'required|alpha',
            "payment_type"=>'required'
            
        ]);
        
     
        // DistrictModel::find($this->district_id)->area()->create(
        //     ['name'=>$this->name]
        // )
        Auth::user()->ticket()->create([
        'firstname'=>$this->firstname,
        'middlename'=>$this->middlename,
        'lastname'=>$this->lastname,
        'phone_no'=>$this->phone_no,
        'flight_details_id'=>$this->flight_id,
        'address'=>$this->address,
        'citizen_number'=>$this->citizen_number,
        'email'=>$this->email,
        'ticketID'=>$this->ticketID,
        "card_no"=>$this->card_no,
        "card_name"=>$this->card_name,
        "payment_type"=>$this->payment_type,
        "fare"=>$this->fare,

        ]);
        $book=FlightDetails::find($id)->decrement('seats');
        session()->flash('message', 'Ticket Booked  successfully Fly World  .');
        return redirect('/viewhistory');
           
    }
   
    

    public function render()
    {

        $flightDetails = FlightDetails::find($this->flight_id);
        return view('livewire.book-tickets',['flightDetails'=>$flightDetails,'name'=>$this->name]);
    }
}
