<main class="p-12">
   <div class="mt-4 w-full grid grid-cols-2 md:grid-cols-2 xl:grid-cols-2 gap-10">
       @forelse ($seats as $seat)
       <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
           <div class="flex items-center">
              <div class="flex-shrink-0">
            

                 <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{$seat->seats}}</span>
                 <h3 class="text-base font-normal text-gray-500">Number of Seats available</h3>
              </div>
              <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
               {{$seat->flight_name}}
                
              </div>
           </div>
        </div>
       @empty
           <h1>No result</h1>
       @endforelse
   
    </div>
</main>