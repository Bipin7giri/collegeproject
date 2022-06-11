<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <section class="py-5 px-40">
        <table class="border-b drop-shadow-lg hidden lg:block ">
            <thead class="bg-black">
                <tr>
                    <th scope="col" class="text-sm font-bold text-white  px-6 py-4 text-left">First Name</th>
                    <th scope="col" class="text-sm  font-bold text-white px-6 py-4 text-left">Middle Name</th>
                    <th scope="col" class="text-sm font-bold text-white  px-6 py-4 text-left">Last Name</th>
                    <th scope="col" class="text-sm font-bold text-white  px-6 py-4 text-left">From</th>
                    <th scope="col" class="text-sm font-bold text-white  px-6 py-4 text-left">To</th>
                    <th scope="col" class="text-sm font-bold text-white  px-6 py-4 text-left">Plane Name</th>
                    <th scope="col" class="text-sm font-bold text-white  px-6 py-4 text-left">Fair</th>
                    <th scope="col" class="text-sm font-bold text-white  px-6 py-4 text-left">Card Name</th>
                    <th scope="col" class="text-sm font-bold text-white  px-6 py-4 text-left">Card Type</th>
                    <th scope="col" class="text-sm font-bold text-white  px-6 py-4 text-left">Booked At</th>
                </tr>
            </thead>

            <tbody class="bg-red-50">
                
                @forelse ($userTicketHistory as $userTicket)
                <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $userTicket->firstname }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $userTicket->middlename }}</td>
                        
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $userTicket->lastname }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $userTicket->flightDetails()->first()->from }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $userTicket->flightDetails()->first()->to }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $userTicket->flightDetails()->first()->flight_name}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Rs.
                        {{ $userTicket->flightDetails()->first()->price }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $userTicket->card_name }}</td>
                          
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $userTicket->payment_type }}</td>    
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $userTicket->created_at }}</td>

                </tr> 
                @empty
                   <h1 class="text-center text-6xl">No history</h1> 
                @endforelse
                

              


            </tbody>
        </table>

    </section>



    <section class="lg:hidden">

        @forelse ($userTicketHistory as $history)

            @foreach ($flightNames as $flightName)
                <div class="grid grid-cols-2 py-5 bg-slate-200 gap-4 px-2 border-b-8  border-red-500">
                    <div><span class="text-red-900 font-bold">First Name:</span> {{ $history->firstname }}
                    </div>
                    <div><span class="text-red-900 font-bold">Last Name:</span>{{ $history->lastname }} </div>
                    <div><span class="text-red-900 font-bold">Last Name:</span>{{ $history->card_name }} </div>

                    <div><span class="text-red-900 font-bold">Flight Name:</span>                {{ $flightName->flight_name }}
                    </div>
                    <div><span class="text-red-900 font-bold">From:</span>  {{ $flightName->from }} </div>
                    <div><span class="text-red-900 font-bold">To:</span>  {{ $flightName->to }}</div>
                    <div><span class="text-red-900 font-bold">Flight Name: </span>  {{ $flightName->from }} </div>
                    <div><span class="text-red-900 font-bold">Price:</span>  {{ $flightName->price }} </div>
                                   <div><span class="text-red-900 font-bold">Price:</span>  {{ $flightName->price }} </div>
                    <div><span class="text-red-900 font-bold">Booket At:</span> {{ $history->created_at }} </div>

                </div>
              
         
            @endforeach
        @empty <h1 class="text-center font-bold text-red-700">No Ticket issued</h1>
        @endforelse


    </section>



</div>
