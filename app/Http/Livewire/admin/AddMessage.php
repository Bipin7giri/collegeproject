<?php

namespace App\Http\Livewire\Admin;

use App\Models\Alert;
use Livewire\Component;

class AddMessage extends Component
{
    public $message;

    public function save()
    {
    $alert= new Alert();
    $alert->message=$this->message;
    $alert->save();
}
public function delete($id){
    // return dd('ok');
       Alert::find($id)->delete();
}
    public function render()
    {
        $messages = Alert::all();
        return view('livewire.admin.add-message',["messages"=>$messages]);
    }
}
