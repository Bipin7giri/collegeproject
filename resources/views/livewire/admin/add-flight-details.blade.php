<!-- component -->
<!-- This is an example component -->
<div>
    <nav class="lg:bg-transparent bg-white  fixed z-30 w-full">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                        class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded">
                        <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <a href="{{ route('addfligtdetails') }}" class="text-xl font-bold flex items-center lg:ml-2.5">

                        <span class="self-center whitespace-nowrap">Dashboard</span>
                    </a>
                    <form action="#" method="GET" class="hidden lg:pl-32">
                        <label for="topbar-search" class="sr-only">Search</label>
                        <div class="mt-1 relative lg:w-64">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" name="email" id="topbar-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5"
                                placeholder="Search">
                        </div>
                    </form>
                </div>
                <div class="flex items-center">
                    <button id="toggleSidebarMobileSearch" type="button"
                        class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg">
                        <span class="sr-only">Search</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                </div>
            </div>
        </div>
    </nav>
    <div class="flex overflow-hidden bg-white pt-16">
        <aside id="sidebar"
            class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
            aria-label="Sidebar">
            <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
                <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex-1 px-3 bg-white divide-y space-y-1">
                        <ul class="space-y-2 pb-2">
                            <li>
                                <form action="#" method="GET" class="lg:hidden">
                                    <label for="mobile-search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <input type="text" name="email" id="mobile-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5"
                                            placeholder="Search">
                                    </div>
                                </form>
                            </li>
                            <li>
                                <a href="{{ route('addfligtdetails') }}"
                                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                        </path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Admin Home</span>

                                </a>
                            </li>
                            <li>
                                <a href="{{ route('addfligtdetails') }}"
                                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                        </path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Dashboard</span>

                                </a>
                            </li>
                            <li>
                                <a href="{{ route('feedbacklist') }}"
                                     class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                        </path>
                                        <path
                                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                        </path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Feedback</span>

                                </a>
                            </li>
                            <li>
                                <a href="{{ route('userlist') }}"
                                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                                        </path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('ticketsall') }}"
                                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Tikcets Details</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('seats') }}"
                                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Seats Details</span>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </aside>
        <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <main>
                <div>
                    <script src="https://cdn.tailwindcss.com"></script>


                    <div class="max-w-none mx-auto sm:px-6 lg:px-8 mt-5">
                        <div class="max-w-none mx-auto sm:px-6 lg:px-8 mt-5">
                            <div>
                                <main>
                                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                        <div class="md:grid md:grid-cols-3 md:gap-6">
                                            <div class="md:col-span-1 flex justify-between">
                                                <div class="px-4 sm:px-0">
                                                    <h3 class="text-lg font-medium text-gray-900">
                                                        Fly World
                                                    </h3>
                                                    <p class="mt-1 text-sm text-gray-600">
                                                        Add Details of your Flight
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="mt-5 md:mt-0 md:col-span-2">
                                                <form wire:submit.prevent="save">
                                                    <input
                                                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                        type="hidden" wire:model="hiddenId" />

                                                    <h3
                                                        class="inline-block mb-2 text-3xl text-center font-serif font-medium text-red-900">
                                                        Flight Information
                                                    </h3>
                                                    <div class="bg-red-100 p-10">
                                                        @if ($this->hiddenId)
                                                            <h3
                                                                class="inline-block mb-2 text-lg font-medium text-gray-900">
                                                                {{ $flight_name }}
                                                            </h3>
                                                        @else
                                                            <h3
                                                                class="inline-block mb-2 text-lg font-medium text-gray-900">
                                                                Enter Flight Details
                                                            </h3>
                                                        @endif
                                                        <div class="grid grid-cols-2 gap-5">
                                                            <div class="w-full">
                                                                <label for=""
                                                                    class="text-black font-bold px-1 block">Flight
                                                                    Name</label>
                                                                <input
                                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                                    type="text" placeholder="Flight Name"
                                                                    wire:model="flight_name" name="flightName"
                                                                    required />
                                                                @error('flightName')
                                                                    <span
                                                                        class="text-rose-600">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="w-full">
                                                                <label for="" class="text-black font-bold px-1">Flight
                                                                    ID</label>
                                                                <input name="FlightId"
                                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                                    type="text" placeholder="Flight ID"
                                                                    wire:model="flight_id" required />
                                                                @error('FlightId')
                                                                    <span
                                                                        class="text-rose-600">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="w-full">
                                                                <label for=""
                                                                    class="text-black font-bold px-1">Departure
                                                                    Date</label>
                                                                <input
                                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                                    type="date" placeholder="Location"
                                                                    wire:model="departure_date" required />
                                                            </div>

                                                            <div class="w-full">
                                                                <label for="" class="text-black font-bold px-1">Arrival
                                                                    Date</label>
                                                                <input
                                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                                    type="date" placeholder="Location"
                                                                    wire:model="arrival_date" required />
                                                            </div>

                                                            <div class="w-full">
                                                                <label for=""
                                                                    class="text-black font-bold px-1">Deprature
                                                                    Time</label>
                                                                <input
                                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                                    type="time" placeholder=""
                                                                    wire:model="departure_time" required />
                                                            </div>

                                                            <div class="w-full">
                                                                <label for="" class="text-black font-bold px-1">Arrival
                                                                    Time</label>
                                                                <input
                                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                                    type="time" placeholder="Location"
                                                                    wire:model="arrival_time" required />
                                                            </div>
                                                            <div class="w-full">
                                                                <label for=""
                                                                    class="text-black font-bold px-1">From</label>
                                                                <input
                                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                                    type="text" placeholder="from" wire:model="from"
                                                                    required />
                                                            </div>
                                                            <div class="w-full">
                                                                <label for=""
                                                                    class="text-black font-bold px-1">To</label>
                                                                <input
                                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                                    type="text" placeholder="to" wire:model="to"
                                                                    required />
                                                            </div>

                                                            <div class="w-full">
                                                                <label for=""
                                                                    class="text-black font-bold px-1">Seats</label>
                                                                <input
                                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                                    type="text" placeholder="seats" wire:model="seats"
                                                                    required />
                                                            </div>
                                                            <div class="w-full">
                                                                <label for=""
                                                                    class="text-black font-bold px-1">Price</label>
                                                                <input
                                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                                    type="text" placeholder="price" required
                                                                    wire:model="price" />
                                                            </div>
                                                            <div class="w-full">
                                                                <label for="" class="text-black font-bold px-1">Choose
                                                                    Flight Image</label>
                                                                <input
                                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                                    type="file" placeholder="Location"
                                                                    wire:model="images" required />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit"
                                                        class="w-full bg-green-600 p-3 text-white font-bold">
                                                        Add
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </main>
                            </div>

                            <div class="sm:px-6 w-full">
                                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                                    <div class="mt-7 overflow-x-auto">
                                        <table class="w-full whitespace-nowrap">
                                            <thead>
                                                <tr tabindex="0"
                                                    class="focus:outline-none h-16 border border-gray-100 rounded">
                                                    <th>
                                                        <div class="flex items-center pl-5">
                                                            <p
                                                                class="text-base font-medium leading-none text-gray-700 mr-2">
                                                                Flight ID
                                                            </p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="flex items-center pl-5">
                                                            <p
                                                                class="text-base font-medium leading-none text-gray-700 mr-2">
                                                                Flight Name
                                                            </p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="flex items-center pl-5">
                                                            <p
                                                                class="text-base font-medium leading-none text-gray-700 mr-2">
                                                                Deprature Time
                                                            </p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="flex items-center pl-5">
                                                            <p
                                                                class="text-base font-medium leading-none text-right text-gray-700 mr-2">
                                                                Arrival Time
                                                            </p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="flex items-center pl-5">
                                                            <p
                                                                class="text-base font-medium leading-none text-gray-700 mr-2">
                                                                Deprature Date
                                                            </p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="flex items-center pl-5">
                                                            <p
                                                                class="text-base font-medium leading-none text-gray-700 mr-2">
                                                                Arrival Date
                                                            </p>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="flex items-center pl-5">
                                                            <p
                                                                class="text-base font-medium leading-none text-gray-700 mr-2">
                                                                From
                                                            </p>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="flex items-center pl-5">
                                                            <p
                                                                class="text-base font-medium leading-none text-gray-700 mr-2">
                                                                To
                                                            </p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="flex items-center pl-5">
                                                            <p
                                                                class="text-base font-medium leading-none text-gray-700 mr-2">
                                                                Price
                                                            </p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="flex items-center pl-5">
                                                            <p
                                                                class="text-base font-medium leading-none text-gray-700 mr-2">
                                                                Seats
                                                            </p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="flex items-center pl-5">
                                                            <p
                                                                class="text-base font-medium leading-none text-gray-700 mr-2">
                                                                Image
                                                            </p>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="flex items-center pl-5">
                                                            <p
                                                                class="text-base font-medium leading-none text-gray-700 mr-2">
                                                                Action
                                                            </p>
                                                        </div>
                                                    </th>
                                                </tr>

                                                <tr></tr>
                                            </thead>

                                            @foreach ($flightDetails as $flightDetail)
                                                <tbody>
                                                    <tr tabindex="0"
                                                        class="focus:outline-none h-16 border border-gray-100 rounded">
                                                        <td class="">
                                                            <div class="flex items-center pl-5">
                                                                <p
                                                                    class="text-base font-medium leading-none text-gray-700 mr-2">
                                                                    {{ $flightDetail->flight_id }}
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="pl-4">
                                                            <div class="flex items-center">
                                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                                    {{ $flightDetail->flight_name }}
                                                                </p>
                                                            </div>
                                                        </td>

                                                        <td class="pl-4">
                                                            <div class="flex items-center">
                                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                                    {{ $flightDetail->departure_time }}
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="pl-4">
                                                            <div class="flex items-center">
                                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                                    {{ $flightDetail->arrival_time }}
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="pl-4">
                                                            <div class="flex items-center">
                                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                                    {{ $flightDetail->departure_date }}
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="pl-4">
                                                            <div class="flex items-center">
                                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                                    {{ $flightDetail->arrival_date }}
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="pl-4">
                                                            <div class="flex items-center">
                                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                                    {{ $flightDetail->from }}
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="pl-4">
                                                            <div class="flex items-center">
                                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                                    {{ $flightDetail->to }}
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="pl-4">
                                                            <div class="flex items-center">
                                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                                    Rs. {{ $flightDetail->price }}
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="pl-4">
                                                            <div class="flex items-center">
                                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                                    {{ $flightDetail->seats }}
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="pl-4">
                                                            <div class="flex items-center">
                                                                <img src="{{ asset('storage/' . $flightDetail->images) }}"
                                                                    alt="" class="object-scale-down h-48 w-96"
                                                                    alt="" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <button type="button"
                                                                class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out"
                                                                wire:click="editflight({{ $flightDetail->id }})">
                                                                Edit
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                        {{-- <div class="mt-10">{{$sportCenters->links()}}</div> --}}
                                    </div>
                                    <div class="p-2">
                                        <button type="button"
                                            class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
                                            <a href="javascript:void(0)" wire:click="addFlightDetails()">Add new Flight
                                                Center</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            <footer
                class="bg-white md:flex md:items-center md:justify-between shadow rounded-lg p-4 md:p-6 xl:p-8 my-6 mx-4">
                <ul class="flex items-center flex-wrap mb-6 md:mb-0">
                    <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline mr-4 md:mr-6">Terms and
                            conditions</a></li>
                    <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline mr-4 md:mr-6">Privacy
                            Policy</a></li>
                    <li><a href="#"
                            class="text-sm font-normal text-gray-500 hover:underline mr-4 md:mr-6">Licensing</a></li>
                    <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline mr-4 md:mr-6">Cookie
                            Policy</a></li>
                    <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline">Contact</a></li>
                </ul>
                <div class="flex sm:justify-center space-x-6">
                    <a href="#" class="text-gray-500 hover:text-gray-900">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </footer>
            <p class="text-center text-sm text-gray-500 my-10">
                &copy; 2019-2021 <a href="https://themesberg.com" class="hover:underline"
                    target="_blank">Themesberg</a>. All rights reserved.
            </p>
        </div>
    </div>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
</div>
