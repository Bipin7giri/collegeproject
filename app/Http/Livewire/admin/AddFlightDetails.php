<?php

namespace App\Http\Livewire\Admin;

use App\Models\FlightDetails;
use Livewire\Component;

class AddFlightDetails extends Component
{
    public $message, $flight_name, $flight_id, $arrival_date, $departure_date, $arrival_time, $departure_time, $seats, $hiddenId;

    public function save()
    {
        $this->validate([
            "flight_name" => "required", 
            "flight_id"=>"required",
            "arrival_date"=>"required",
            "departure_date"=>"required",
            "arrival_time"=>"required",
            "departure_time"=>"required",
            "seats"=>"required",
        ]);
        // DistrictModel::find($this->district_id)->area()->create(
        //     ['name'=>$this->name]
        // );
        if(intval($this->hiddenId)>0){
            $flightDetails = FlightDetails::find($this->hiddenId);
        }else{
            $flightDetails= new FlightDetails();
        }
        $flightDetails->flight_name=$this->flight_name;
        $flightDetails->flight_id=$this->flight_id;
        $flightDetails->departure_date=$this->departure_date;
        $flightDetails->arrival_date=$this->departure_date;
        $flightDetails->arrival_time=$this->arrival_time;
        $flightDetails->departure_time=$this->departure_time;
        $flightDetails->seats=$this->seats;
        $flightDetails->save();

    }
    public function editflight($id)
    {
        $singleData= FlightDetails::find($id);
        $this->flight_name= $singleData->flight_name;
        $this->flight_id= $singleData->flight_id;
        $this->departure_date= $singleData->departure_date;
        $this->arrival_time= $singleData->arrival_time;
        $this->departure_time= $singleData->departure_time;
        $this->seats= $singleData->seats;

        $this->hiddenId=$singleData->id;
    }
    public function render()
    {
        $flightDetails = FlightDetails::all();
        return view('livewire.admin.add-flight-details',['flightDetails'=>$flightDetails]);
    }
}
