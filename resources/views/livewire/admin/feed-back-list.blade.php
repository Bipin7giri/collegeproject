<main>

   <!-- Component Start -->
   @forelse($feedBacks as $feedBack)
   <div class="flex w-full p-8 border-b border-gray-300">
       <div class="flex flex-col flex-grow ml-4">
           <div class="flex">
               <span class="font-semibold">{{$feedBack->name}}</span>
               <span class="ml-1">{{$feedBack->email}}</span>
               <span class="ml-auto text-sm">{{$feedBack->created_at}}</span>
           </div>
           <p class="mt-1">{{$feedBack->comment}}</p>
           
       </div>
   </div>
   @empty <h1>NO Result Found</h1>
   @endforelse
</main>