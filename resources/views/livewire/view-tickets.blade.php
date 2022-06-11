<div>

    <section class="px-0 lg:px-40">
        <div class="flex justify-center py-16">
  
     <div class="pt-2 relative mx-auto text-gray-600">
        <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
          type="search" name="search" placeholder="Search" wire:model="search">
        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
          <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
            width="512px" height="512px">
            <path
              d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
          </svg>
        </button>
      </div>
        </div>
        <table class="min-w-full hidden lg:block text-center rounded-xl drop-shadow-lg">
            <thead class="border-b bg-gray-800">
                <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Flight</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">From</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">To</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Deprature Time</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Arrival Time</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Deprature Date</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Arrival Date</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Seats</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Price</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Action</th>
                </tr>
            </thead class="border-b">

            @forelse ($flightDetails as $flightDetail)
            <tr class="bg-white border-b">
                <td class="text-md text-yellow-900 font-serif font-bold px-6 py-4 whitespace-nowrap">
                    {{ $flightDetail->flight_name }}</td>
                <td class="text-md text-gray-900  px-6 py-4 font-bold whitespace-nowrap">{{ $flightDetail->from }}
                </td>
                <td class="text-md text-gray-900 font-bold px-6 py-4 whitespace-nowrap">{{ $flightDetail->to }}
                </td>
                <td class="text-md text-gray-900 font-md px-6 py-4 whitespace-nowrap">
                    {{ $flightDetail->departure_time }}</td>
                <td class="text-md text-gray-900 font-md px-6 py-4 whitespace-nowrap">
                    {{ $flightDetail->arrival_time }}</td>
                <td class="text-md text-gray-900 font-md px-6 py-4 whitespace-nowrap">
                    {{ $flightDetail->departure_date }}</td>
                <td class="text-md text-gray-900 font-md px-6 py-4 whitespace-nowrap">
                    {{ $flightDetail->arrival_date }}</td>
                <td class="text-md text-gray-900  px-6 py-4 font-bold whitespace-nowrap">
                    {{ $flightDetail->seats }}</td>
                <td class="text-md text-gray-900 font-md px-6 py-4 whitespace-nowrap">Rs.
                    {{ $flightDetail->price }}</td>
                <td class="text-md text-gray-900 font-md px-6 py-4 whitespace-nowrap">
                    <a href="{{ route('booktickets', $flightDetail->id) }}"
                        :active="request() - > routeIS('booktickets')"
                        class="font-bold text-red-900 font-bold  px-10  mb-4 cursor-pointer">Book Ticket
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-4 mx-3 inline" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </td>

            </tr>
            @empty
                <h1 class="text-gray-500">NO RESULT FOUND</h1>
            @endforelse
          

        </table>

    </section>


    <div class="lg:hidden border-b-8  border-red-500">
        @foreach ($flightDetails as $flightDetail)
            <div class="px-5 border-b-8  border-red-500">

                <div class="grid grid-cols-2 gap-5 py-5">
                    <div>
                        <Span class="text-red-900 font-bold"> Name:</Span> {{ $flightDetail->flight_name }}

                    </div>

                    <div>
                        <Span class="text-red-900 font-bold"> Seats:</Span> {{ $flightDetail->seats }}

                    </div>

                    <div>
                        <Span class="text-red-900 font-bold"> From:</Span> {{ $flightDetail->from }}

                    </div>
                    <div>
                        <Span class="text-red-900 font-bold"> To:</Span> {{ $flightDetail->to }}
                        <a href="{{ route('booktickets', $flightDetail->id) }}"
                            :active="request() - > routeIS('booktickets')"
                            class="font-bold text-red-900  block cursor-pointer">Book Ticket
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-4 mx-3 inline" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        @endforeach

    </div>

</div>
