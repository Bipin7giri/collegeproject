<?php

namespace App\Http\Livewire\Admin;

use App\Models\FeedBack;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FeedBackList extends Component
{
    public $rating;
    public function render()
    {
        $count  = DB::table('feed_back')->where('comment','like','%'.'good'.'%')->orWhere('comment','like','%'.'ok'.'%')->orWhere('comment','like','%'.'best'.'%')->orWhere('comment','like','%'.'superb'.'%')->orWhere('comment','like','%'.'outsanding'.'%')->count();
        $total  = DB::table('feed_back')->count();
       
        $this->rating = ($count/$total)*100;
        $feedBacks= FeedBack::all();
        return view('livewire.admin.feed-back-list',["feedBacks"=>$feedBacks,"count"=>$count])->layout('layouts.dashboard');
    }
}
