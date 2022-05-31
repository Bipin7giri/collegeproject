<div>




    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Owl corusel -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css" />

    <div>
        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="items-center md:flex md:space-x-6">
                    <div class="md:w-1/2">
                        <h3 class="text-4xl font-bold text-gray-800">Fly With Us <br> amet, consectetur
                        </h3>
                        <p class="max-w-md mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        
                       <a  href="{{ route('login') }}" class="inline-block px-10 my-6 cursor-pointer py-2 border-2 border-red-500 text-red-500 font-medium text-lg leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Book Flight</a>

                    </div>

                    <div class="mt-8 md:mt-0 md:w-1/2">
                        <div class="flex items-center justify-center">
                            <div class="max-w-md">
                                <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                    src="https://images.pexels.com/photos/731217/pexels-photo-731217.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="flex lg:flex-row px-10 flex-col gap-5 py-8">
                <div class="owl-carousel">
                    @foreach ($flightDetails as $flightDetail)
                        <div class="w-full drop-shadow-xl   rounded-2xl bg-white border-2">
                            {{-- <img src="{{ asset('storage/' . $flightDetail->images) }}" alt="" class="object-scale-down h-48 w-96"> --}}

                            <a href="{{ route('login') }}">
                                <img src="{{ asset('storage/' . $flightDetail->images) }}" alt="pic"
                                    class=" rounded-2xl w-full cursor-pointer h-44 pb-2">
                            </a>
                            <a href="{{ route('login') }}"
                                class="font-bold text-2xl text-center text-red-900 px-5 uppercase  mb-4 cursor-pointer">
                                {{ $flightDetail->flight_name }}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-4 mx-3 inline " fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>
                            <div class="px-3">
                                <p class="font-md ">

                                    <span class="font-bold text-red-800 px-2">From:</span>
                                    {{ $flightDetail->from }}

                                </p>
                                <p class="font-md ">
                                    <span class="font-bold text-red-800 px-2">To:</span>
                                    {{ $flightDetail->to }}
                                </p>

                                <p class="font-md pb-2 ">
                                    <span class="font-bold text-red-800 px-2">Seats:</span>
                                    {{ $flightDetail->seats }}
                                </p>

                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="items-center md:flex md:space-x-6">
                    <div class="md:w-1/2">
                        <div class="flex items-center justify-center">
                            <div class="max-w-md">
                                <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                    src="https://images.pexels.com/photos/2033343/pexels-photo-2033343.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 md:mt-0 md:w-1/2">
                        <h3 class="text-2xl font-semibold text-gray-800">Lorem ipsum dolor sit <br> amet, consectetur
                        </h3>
                        <p class="max-w-md mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                       <a  href="{{ route('login') }}" class="inline-block px-10 my-6 cursor-pointer py-2 border-2 border-red-500 text-red-500 font-medium text-lg leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Book Flight</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="md:flex md:justify-between">
                    <h2 class="text-3xl font-semibold text-gray-800">Lorem ipsum dolor sit amet, consectetur <br>
                        adipiscing
                        elit, sed do eiusmod</h2>

                </div>

                <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
                    <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md">
                        <h2 class="text-xl font-medium text-gray-800">Audio</h2>
                        <p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac
                            aliquam ac
                            volutpat, viverra magna risus aliquam massa.</p>
                    </div>

                    <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md">
                        <h2 class="text-xl font-medium text-gray-800">Audio</h2>
                        <p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac
                            aliquam ac
                            volutpat,
                            viverra magna risus aliquam massa.</p>
                    </div>

                    <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md">
                        <h2 class="text-xl font-medium text-gray-800">Audio</h2>
                        <p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac
                            aliquam ac
                            volutpat,
                            viverra magna risus aliquam massa.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto text-center">
                <h2 class="text-3xl font-semibold text-gray-800">Lorem ipsum dolor sit amet, <br> consectetur adipiscing
                </h2>
                <p class="max-w-lg mx-auto mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                    cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia
                    deserunt mollit anim id est laborum.</p>

                <img class="object-cover object-center w-full mt-16 rounded-md shadow h-80"
                    src="https://images.pexels.com/photos/3408744/pexels-photo-3408744.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>
        </section>


        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto text-center">
                <h2 class="text-3xl font-semibold text-gray-800">Our Destination</h2>
                <p class="max-w-lg mx-auto mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                    cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia
                    deserunt mollit anim id est laborum.</p>

                <div class="grid gap-8 mt-6 md:grid-cols-2 lg:grid-cols-4">
                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-md shadow"
                            src="https://images.unsplash.com/photo-1562462181-b228e3cff9ad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1310&q=80">
                        <h3 class="mt-2 font-medium text-gray-700">Pokhera</h3>
                    </div>

                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-md shadow"
                            src="https://images.unsplash.com/photo-1605640840605-14ac1855827b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1333&q=80">
                        <h3 class="mt-2 font-medium text-gray-700">Kathmandu</h3>
                    </div>

                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-md shadow"
                            src="https://images.unsplash.com/photo-1571330177234-54304dac2beb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80">
                        <h3 class="mt-2 font-medium text-gray-700">Mustang</h3>
                    </div>

                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-md shadow"
                            src="https://images.unsplash.com/photo-1616166831462-48a3e9089c20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80">
                        <h3 class="mt-2 font-medium text-gray-700">Lumbani</h3>
                    </div>
                </div>
            </div>
        </section>

        <footer class="text-center lg:text-left  text-white" style="background-color: #7D174D">
            <div class="flex justify-center items-center lg:justify-between p-6 border-b border-gray-300">
                <div class="mr-12 hidden lg:block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <div class="flex justify-center">
                    <a href="#!" class="mr-6 text-white">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                            class="w-2.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                            </path>
                        </svg>
                    </a>
                    <a href="#!" class="mr-6 text-white">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                            class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                            </path>
                        </svg>
                    </a>
                    <a href="#!" class="mr-6 text-white">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google"
                            class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                            <path fill="currentColor"
                                d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                            </path>
                        </svg>
                    </a>
                    <a href="#!" class="mr-6 text-white">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                            class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                            </path>
                        </svg>
                    </a>
                    <a href="#!" class="mr-6 text-white">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in"
                            class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                            </path>
                        </svg>
                    </a>
                    <a href="#!" class="text-white">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github"
                            class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                            <path fill="currentColor"
                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="mx-6 py-10 text-center md:text-left">
                <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="">
                        <h6
                            class="
                      uppercase
                      font-semibold
                      mb-4
                      flex
                      items-center
                      justify-center
                      md:justify-start
                    ">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cubes"
                                class="w-4 mr-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M488.6 250.2L392 214V105.5c0-15-9.3-28.4-23.4-33.7l-100-37.5c-8.1-3.1-17.1-3.1-25.3 0l-100 37.5c-14.1 5.3-23.4 18.7-23.4 33.7V214l-96.6 36.2C9.3 255.5 0 268.9 0 283.9V394c0 13.6 7.7 26.1 19.9 32.2l100 50c10.1 5.1 22.1 5.1 32.2 0l103.9-52 103.9 52c10.1 5.1 22.1 5.1 32.2 0l100-50c12.2-6.1 19.9-18.6 19.9-32.2V283.9c0-15-9.3-28.4-23.4-33.7zM358 214.8l-85 31.9v-68.2l85-37v73.3zM154 104.1l102-38.2 102 38.2v.6l-102 41.4-102-41.4v-.6zm84 291.1l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6zm240 112l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6z">
                                </path>
                            </svg>
                            Tailwind ELEMENTS
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum dolor
                            sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="">
                        <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                            Products
                        </h6>
                        <p class="mb-4">
                            <a href="#!" class="text-white">Angular</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-white">React</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-white">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Laravel</a>
                        </p>
                    </div>
                    <div class="">
                        <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                            Useful links
                        </h6>
                        <p class="mb-4">
                            <a href="#!" class="text-white">Pricing</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-white">Settings</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-white">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Help</a>
                        </p>
                    </div>
                    <div class="">
                        <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                            Contact
                        </h6>
                        <p class="flex items-center justify-center md:justify-start mb-4">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home"
                                class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
                                </path>
                            </svg>
                            New York, NY 10012, US
                        </p>
                        <p class="flex items-center justify-center md:justify-start mb-4">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                                class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                </path>
                            </svg>
                            info@example.com
                        </p>
                        <p class="flex items-center justify-center md:justify-start mb-4">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone"
                                class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                </path>
                            </svg>
                            + 01 234 567 88
                        </p>
                        <p class="flex items-center justify-center md:justify-start">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="print"
                                class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z">
                                </path>
                            </svg>
                            + 01 234 567 89
                        </p>
                    </div>
                </div>
            </div>
          
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                nav: false,
                autoplay: true,
                loop: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 4,
                    },
                },
            });
        });
    </script>

</div>
