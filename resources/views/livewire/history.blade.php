<div>
    @forelse ($userTicketHistory as $history)
        {{$history->firstname}}
        {{$history->lastname}}
        {{$history->created_at}}
        {{-- {{$history->flightDetils()->first()->flight_name}} --}}
      
    @empty
        
    @endforelse
</div>
