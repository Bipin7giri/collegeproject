<div>
    {{-- @foreach ($flightDetails as $flightDetail)
    {{$flightDetail->flight_name}}
    {{$flightDetail->to}}
    {{$flightDetail->from}}
    {{$flightDetail->seats}}
    <img src="{{ asset('storage/' . $flightDetail->images) }}" alt="" class="object-scale-down h-48 w-96">
    {{$flightDetail->flight_name}}
    {{$flightDetail->flight_name}}

@endforeach --}}
<section class="lg:px-36 px-10 py-10 bg-white">

    <h1 class="text-3xl font-bold font-mono py-5  text-black">Travel safely with us</h1>
    <p class="font-serif text-gray-500">As one of the largest and most experienced global airlines throughout you
        can rely on us to take you on your next journey safely.</p>

    <div class="flex lg:flex-row flex-col gap-5 py-4">
        @foreach ($flightDetails as $flightDetail)
        <div class="w-full   rounded-2xl bg-white border-2">
            <img src="{{ asset('storage/' . $flightDetail->images) }}"  alt="pic"
                class=" rounded-2xl w-full cursor-pointer h-44 pb-2">
            <a href="{{route('booktickets',$flightDetail->id)}}":active="request()->routeIS('booktickets')"  class="font-bold text-red-900  px-10  mb-4 cursor-pointer">{{$flightDetail->flight_name}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-4 mx-3 inline" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            <h1>{{$flightDetail->to}}</h1>
            <h1>{{$flightDetail->from}}</h1>
            <h1>{{$flightDetail->arrival_date}}</h1>
            <h1>{{$flightDetail->arrival_time}}</h1>
            <h1>{{$flightDetail->departure_date}}</h1>
            <h1>{{$flightDetail->departure_time}}</h1>
            <h1>{{$flightDetail->price}}</h1>
        </div>
        @endforeach

      

    </div>

</section>
</div>
