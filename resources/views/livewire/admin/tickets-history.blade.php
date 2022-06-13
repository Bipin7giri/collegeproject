<main>
   <!-- component -->
<div class="-my-2 py-2  sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
<div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
   <table class="min-w-full">
       <thead>
           <tr>
               <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Ticket Number</th>
               <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Firstname</th>
               <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">lastname</th>
               <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Email</th>
               <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Address</th>
               <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">flight_names</th>
               <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Payment type</th>
               <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">citizen_number</th>
               <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Issued at</th>
                                   
               <th class="px-6 py-3 border-b-2 border-gray-300"></th>
           </tr>
       </thead>
       <tbody class="bg-white">
          @forelse ($history as $th)
               <tr>
                   
                   <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                       <div class="flex items-center">
                           <div>
                               <div class="text-sm leading-5 text-gray-800">{{$th->ticketID}}</div>
                           </div>
                       </div>
                   </td>  
                   <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                       <div class="text-sm leading-5 text-blue-900">{{$th->firstname}}</div>
                   </td>
                   <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                       <div class="text-sm leading-5 text-blue-900">{{$th->lastname}}</div>
                   </td>
                   <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{$th->email}}</td>
                   <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{$th->address}}</td>
                   <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{$th->flightDetails()->first()->flight_name}}</td>
                   <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{$th->payment_type}}</td>
                   <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{$th->citizen_number}}</td>
                   <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{$th->created_at}}</td>
                   
         </tr>
         @empty
         NO Tikcets Issued
     @endforelse
  
       </tbody>
   </table>

</div>
</div>
</div>
</div> 
</main>