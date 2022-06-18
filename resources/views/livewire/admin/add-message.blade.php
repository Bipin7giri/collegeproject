<div id="main-content" class="h-full w-full bg-gray-50">
   <main>
       <!-- component -->
   <div class="flex items-center justify-center max-h-full  bg-gray-50">
       <div class="bg-red-100 w-[800px] rounded-2xl border shadow-x1 p-10 max-w-lg">
         <div class="flex flex-col items-center space-y-4">
           <h1 class="font-bold text-2xl text-gray-700 w-4/6 text-center">
             Add Message
           </h1>
           <p class="text-sm text-gray-500 text-center w-5/6">
             Enter your message
           </p>
           <input
             type="text"
             placeholder="Your Message"
             class="border-2 rounded-lg w-full h-12 px-4"
             wire:model="message"
             required
           />
           <button
             class="bg-red-400 text-white rounded-md hover:bg-red-500 font-semibold px-4 py-3 w-full"
         wire:click="save()">
             Add
           </button>
         </div>
       </div>
       
     </div>
     <!-- component -->
<section class="antialiased bg-gray-100 text-gray-600 py-10 px-4">
<div class="flex flex-col justify-center">
  <!-- Table -->
  <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
      <header class="px-5 py-4 border-b border-gray-100">
          <h2 class="font-semibold text-gray-800">Customers</h2>
      </header>
      <div class="p-3">
          <div class="overflow-x-auto">
              <table class="table-auto w-full">
                  <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                      <tr>
                          <th class="p-2 whitespace-nowrap">
                              <div class="font-semibold text-left">ID</div>
                          </th>
                          <th class="p-2 whitespace-nowrap">
                              <div class="font-semibold text-left">Message</div>
                          </th>
                          <th class="p-2 whitespace-nowrap">
                              <div class="font-semibold text-left">Delete</div>
                          </th>
                      </tr>
                  </thead>
                  <tbody class="text-sm divide-y divide-gray-100">
                      <tr>
                         @forelse ($messages as $message)
                         <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="font-medium text-gray-800">{{$message->id}}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                         <div class="flex items-center">
                             <div class="font-medium text-gray-800">{{$message->message}}</div>
                         </div>
                     </td>
                     <td class="p-2 whitespace-nowrap">
                      <div class="flex items-center">
                          <div class="font-medium text-gray-800"> <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" wire:click="delete({{$message->id}})">Delete</button></div>
                      </div>
                  </td>
                        
                         @empty
                            <h1 class="text-4xl text-green-500">NO messages</h1> 
                         @endforelse
                      
                      </tr>
                  
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
</section>
     {{-- <script>
       function save(){
           alert("save");
       }
     </script> --}}
     
   </main>
   
  </div>