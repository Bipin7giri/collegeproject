<div>
    @if (session()->has('message'))
        
        <div id="alert-additional-content-3" class="p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
            <div class="flex items-center">
              <svg class="mr-2 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
              <h3 class="text-lg font-medium text-green-700 dark:text-green-800">{{ session('message')}}</h3>
            </div>
            <div class="flex">
              <button type="button" class="text-green-700 bg-transparent border border-green-700 hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-green-800 dark:text-green-800 dark:hover:text-white" onclick="abc()" aria-label="Close">
                Dismiss
              </button>
            </div>
          </div>
          <script>
            function abc(){
                document.getElementById("alert-additional-content-3").style.visibility = "hidden";
            }
          </script>
    @endif

    <section class="py-5 px-20">
        <table class="border-b drop-shadow-lg hidden lg:block ">
            <thead class="bg-black">
                <tr>
                    <th scope="col" class="text-sm font-bold text-white  px-6 py-4 text-left">Ticket Number</th>
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
                        {{ $userTicket->ticketID }}</td>
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
                        {{ $userTicket->fare }}</td>
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
