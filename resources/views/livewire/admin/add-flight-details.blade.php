<main>
    <div>
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