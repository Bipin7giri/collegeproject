<?php

namespace App\Http\Livewire;

use App\Models\FeedBack as ModelsFeedBack;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class FeedBack extends Component
{
    public $name, $email, $comment;

    public function save()
    {

    $this->validate([
        "name" => "required", 
        "email"=>"required|email",
        "comment"=>"required",
    ]);
  

    $comments= new ModelsFeedBack();
    $comments->name=$this->name;
    $comments->email=$this->email;
    $comments->comment=$this->comment;
    $comments->save();
    session()->flash('message', 'Feedback sent  .');
    return redirect('/feedback');
   

}


    public function render()
    {
        return view('livewire.feed-back');
    }
}
