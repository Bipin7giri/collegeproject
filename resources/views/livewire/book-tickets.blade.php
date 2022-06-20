{{-- <div>

  




</div> --}}
<div>
    <!-- component -->
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');

    </style>
    <style>

        .form-radio {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            display: inline-block;
            vertical-align: middle;
            background-origin: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            flex-shrink: 0;
            border-radius: 100%;
            border-width: 2px;
        }

        .form-radio:checked {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
        }

        @media not print {
            .form-radio::-ms-check {
                border-width: 1px;
                color: transparent;
                background: inherit;
                border-color: inherit;
                border-radius: inherit;
            }
        }

        .form-radio:focus {
            outline: none;
        }

        .form-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23a0aec0'%3e%3cpath d='M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z'/%3e%3c/svg%3e");
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            background-repeat: no-repeat;
            padding-top: 0.5rem;
            padding-right: 2.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            background-position: right 0.5rem center;
            background-size: 1.5em 1.5em;
        }

        .form-select::-ms-expand {
            color: #a0aec0;
            border: none;
        }

        @media not print {
            .form-select::-ms-expand {
                display: none;
            }
        }

        @media print and (-ms-high-contrast: active),
        print and (-ms-high-contrast: none) {
            .form-select {
                padding-right: 0.75rem;
            }
        }

    </style>
    <script src="https://smtpjs.com/v3/smtp.js"></script>  
    <div class="min-w-screen min-h-screen bg-gray-50 py-5">
    <input class="hidden" value="{{$ticketID}}" id ="ticketNumber">
     {{-- {{$ticketID}} --}}
        <div class="bg-white flex lg:flex-row flex-col  p-5  gap-2 rounded-2xl drop-shadow-xl">
            <div>
                <h3 class="font-bold"><span class=" font-bold  text-xl  text-slate-800 font-serif px-2">FlightName :
                    </span>{{ $flightDetails->flight_name }}</h3>

            </div>

            <div>
                <h3 class="font-bold"><span
                        class=" font-bold  text-xl  text-slate-800 font-serif px-2">From:</span>{{ $flightDetails->from }}
                </h3>
            </div>

            <div>
                <h3 class="font-bold"><span
                        class=" font-bold  text-xl text-slate-800 font-serif px-2">To:</span>{{ $flightDetails->to }}
                </h3>

            </div>

            <div>
                <h3 class="font-bold"><span class="font-bold  text-xl  text-slate-800 font-serif px-2">
                        Seats:</span>{{ $flightDetails->seats }}</h3>

            </div>

            <div>
                <h3 class="font-bold"><span class="font-bold  text-xl  text-slate-800 font-serif px-2">Arrival
                        Time:</span>{{ $flightDetails->arrival_time }}</h3>

            </div>

            <div>
                <h3 class="font-bold"><span class=" font-bold text-xl   text-slate-800 font-serif px-2">Deprature
                        Time:</span>{{ $flightDetails->departure_time }}</h3>
            </div>

            <div>

                <h3 class="font-bold"><span
                        class=" font-bold text-xl  text-slate-800 font-serif px-2">Price:</span>Rs.
                        @if($flightDetails->seats<=5)
                        {{$flightDetails->price+1500}}
                        @elseif($flightDetails->seats<=10)
                        {{$flightDetails->price+1000}}
                        @elseif($flightDetails->seats<=15)
                        {{$flightDetails->price+500}}
                        @else
                        {{$flightDetails->price}}
                        @endif
                        </h3>
            </div>

        </div>
        <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-10 text-gray-800">
            <div class="w-full">
                <div class="-mx-3 md:flex items-start">

                    <div class="lg:px-24 rounded-lg">
                        @if ($flightDetails->seats > 0)
                            <div class="bg-slate-100 p-5">
                                <div class="mt-8 space-y-6">
                                    <input type="hidden" name="remember" value="true">
                                    <div class="rounded-md shadow-sm -space-y-px">
                                        <div class="flex lg:flex-row flex-col gap-5">
                                            <div>
                                                <label for="fname" class="text-black font-serif font-bold">First
                                                    Name</label>
                                                <input id="fname" type="text" required
                                                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                                    placeholder="First Name" wire:model="firstname">
                                                @error('firstname')
                                                    <span class="text-rose-600">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div>
                                                <label for="mname" class="text-black font-serif font-bold">Middle
                                                    Name</label>
                                                <input id="mname" type="text"
                                                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                                    placeholder="Middel Name" required wire:model="middlename">
                                            </div>

                                            <div>
                                                <label for="lname" class="text-black font-serif font-bold">Last
                                                    Name</label>
                                                <input id="lname" type="text" required
                                                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                                    placeholder="Last Name" wire:model="lastname">
                                                @error('lastname')
                                                    <span class="text-rose-600">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="flex gap-5 py-3">
                                            <div class="w-3/12">
                                                <label for="pnome" class="text-black font-serif font-bold">Phone
                                                    No</label>
                                                <input id="pnome" type="number" required
                                                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                                    placeholder="Phone no" wire:model="phone_no">
                                                @error('phone_no')
                                                    <span class="text-rose-600">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="w-3/12">
                                                <label for="address"
                                                    class="text-black font-serif font-bold">Address</label>
                                                <input id="address" type="text" required
                                                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                                    placeholder=" address" wire:model="address">
                                                @error('address')
                                                    <span class="text-rose-600">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="py-3">
                                            <label for="email-address"
                                                class="text-black font-serif font-bold">Email</label>
                                            <input id="email"  name="email" type="email" autocomplete="email" required
                                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                                placeholder="Email Address" wire:model="email">
                                            @error('email')
                                                <span class="text-rose-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="citz" class="text-black font-serif font-bold">Citizen
                                                Number</label>
                                            <input id="citz" type="number" min="10" required
                                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                                placeholder="Citizen Number" wire:model="citizen_number">
                                            @error('firstname')
                                                <span class="text-rose-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>

                                    </div>
                                </div>
                            </div>

                    </div>

                    <div class="px-3 md:w-5/12">
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-3 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-3 items-center">
                                <div class="w-32">
                                    <span class="text-gray-600 font-semibold">Name</span>
                                </div>
                                <div class="flex-grow pl-3">
                                    <span class="text-red-500 font-bold"> {{ $name->name }}</span>
                                </div>
                            </div>
                            <div class="w-full flex items-center">
                                <div class="w-32">
                                    <span class="text-gray-600 font-semibold">Email Address</span>
                                </div>
                                <div class="flex-grow pl-3">
                                    <span class="text-black font-medium">{{ $name->email }}</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 text-gray-800 font-light mb-6">
                            <div class="w-full p-3 border-b border-gray-200">
                                <div class="mb-5 flex justify-around">
                                    <label for="type1" class="flex items-center cursor-pointer">
                                        <input type="radio" wire:model="payment_type" value="card"
                                            class="form-radio h-5 w-5 text-indigo-500" value="MasterCard" name="card"
                                            id="type1">
                                        <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png"
                                            class="h-6 ml-3">
                                            @error('payment_type')
                                            <span class="text-rose-600">{{ $message }}</span>
                                                @enderror
                                    </label>
                                    <label for="type2" class="flex items-center cursor-pointer">
                                        <input type="radio" wire:model="payment_type"
                                            class="form-radio h-5 w-5 text-indigo-500" id="type2" name="card"
                                            value="Esewa">
                                        <span class="text-green-600 mx-2"> <span class="font-bold text-2xl">
                                                E</span>sewa</span>
                                                @error('payment_type')
                                                <span class="text-rose-600">{{ $message }}</span>
                                                    @enderror
                                    </label>
                                    <label for="type2" class="flex items-center cursor-pointer">
                                        <input type="radio" wire:model="payment_type"
                                            class="form-radio h-5 w-5 text-indigo-500" 
                                            value="PayPal">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg"
                                            width="80" class="ml-3" />
                                            @error('payment_type')
                                        <span class="text-rose-600">{{ $message }}</span>
                                            @enderror
                                    </label>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Name on
                                            card</label>
                                        <div>
                                            <input
                                                class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                placeholder="John Smith"  wire:model="card_name"
                                                type="text" />
                                        </div>
                                        @error('card_name')
                                        <span class="text-rose-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Card number</label>
                                        <div>
                                            <input
                                                class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                placeholder="0000 0000 0000 0000" wire:model="card_no" value="Esewa"
                                                type="text" />
                                        </div>
                                        @error('card_no')
                                        <span class="text-rose-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                              
                        
                            </div>
                            <div class="w-full p-3">

                            </div>
                        </div>
                        <div>

                        </div>
                        <button 
                        onclick="sendEmail()"
                         type="submit" wire:click="bookNow({{ $flightDetails->id }})"
                            class="group relative text-lg w-full flex justify-center py-2 px-4 border border-transparent  font-medium rounded-md text-white bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2">
                            Book
                        </button>
                    </div>
                @else
                    <h1 class="text-xl">No Plane Seats Avilable 😥</h1>
                    @endif
                </div>
            </div>
        </div>

    </div>
    <script>
    
        function sendEmail() {
const email = document.getElementById('email').value;
const ticketID = document.getElementById('ticketNumber').value;
const fname = document.getElementById('fname').value;

 Email.send({
    SecureToken : "34b664eb-bb49-4ef5-8702-2034bedcc298",
    To : email,
    From : "bipingiri27@gmail.com",
    Subject : "Ticket Book successfully",
    Body : "This is the mail to confirm you that your ticket has been successfully booked. Your ticket number is"+ticketID+ 
    " Thank you for using our website."
}).then(
//   message => alert("fill all the form")
);
   
    }


    </script>

</div>
