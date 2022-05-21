<div>
    @foreach ($flightDetails as $flightDetail)
        {{$flightDetail->flight_name}}
        {{$flightDetail->to}}
        {{$flightDetail->from}}
        {{$flightDetail->seats}}
        <img src="{{ asset('storage/' . $flightDetail->images) }}" alt="" class="object-scale-down h-48 w-96">
        {{$flightDetail->flight_name}}
        {{$flightDetail->flight_name}}

    @endforeach
</div>
