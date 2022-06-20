<main class="p-12">
   <div class="mt-4 w-full grid grid-cols-2 md:grid-cols-2 xl:grid-cols-2 gap-10">
       @forelse ($seats as $seat)
       <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
           <div class="flex items-center">
              <div class="flex-shrink-0">
            
               <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"><img src="{{ asset('storage/' . $seat->images) }}"
                  alt="" class="object-scale-down h-48 w-96"
                  alt="" /></span>
                 <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{$seat->seats}}</span>

                 
                 
                 
                 <h3 class="text-base font-normal text-gray-500">Number of Seats available</h3>
                 <h3 class="text-base font-normal text-purple-500">{{"Date: ".$seat->arrival_date}}</h3>
                 <h3 class="text-base font-normal text-pink-500">{{"Time: ".$seat->departure_time}}</h3>

                 <h3 class="text-base font-normal text-green-500">{{"From: ".$seat->from}}</h3>
                 <h3 class="text-base font-normal text-yellow-500">{{"To: ".$seat->to}}</h3>



              </div>
              
            
           </div>
        </div>
       @empty
           <h1>No result</h1>
       @endforelse
   
    </div>
</main>