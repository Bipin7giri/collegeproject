<?php

namespace App\Http\Livewire;

use App\Models\FlightDetails;
use App\Models\TicketDetails;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BookTickets extends Component
{
    public $flight_id, $firstname, $lastname, $phone_no, $middlename, $address, $email, $citizen_number;
    public function mount($flight_id)
    {
        $this->flight_id= $flight_id;
    }
      
    public function bookNow($id)
    {
        $this->validate([
            "firstname" => "required", 
            "lastname"=>"required",
            "phone_no"=>"required",
            "address"=>"required",
            "email"=>"required",
            "citizen_number"=>"required",
            
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
        'email'=>$this->email
        ]);
        $book=FlightDetails::find($id)->decrement('seats');
           
    }
    

    public function render()
    {
        $flightDetails = FlightDetails::find($this->flight_id);
        return view('livewire.book-tickets',['flightDetails'=>$flightDetails]);
    }
}
