<nav class="top-1 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-5 navbar-expand-lg">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        
        <div class="shrink-0 flex items-center mr-4">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/logo-xl.png') }}" style="max-width: 80px; max-height: 80px;" alt="Logo">
            </a>
        </div>


        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>

        
        <div class="lg:flex flex-grow justify-center bg-white lg:bg-opacity-0 lg:shadow-none hidden ml-3 hidden w-full md:block md:w-auto" id="navbar-default">
                                                <ul class="flex flex-col lg:flex-row list-none mr-auto ml-4 pl-4">
                                                    <li class="flex items-center">
                                                        <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-4 py-4 lg:py-2 flex items-center text-base uppercase font-bold" href="{{route('home')}}">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <li class="flex items-center">
                                                        <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700  px-4 py-4 lg:py-2 flex items-center text-base uppercase font-bold" href="{{route('drinks')}}">
                                                            Drinks
                                                        </a>
                                                    </li>
                                                    <li class="flex items-center">
                                                        <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-4 py-4 lg:py-2 flex items-center text-base uppercase font-bold" href="{{route('gallery')}}">
                                                            Gallery
                                                        </a> 
                                                    </li>
                                                    <li class="flex items-center">
                                                        <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-4 py-4 lg:py-2 flex items-center text-base uppercase font-bold" href="{{route('contact')}}">
                                                            Contact us 
                                                        </a> 
                                                    </li>
                                                    <li class="flex items-center">
                                                        <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-4 py-4 lg:py-2 flex items-center text-base uppercase font-bold" href="{{route('reserva.create')}}">
                                                            RESERVAR 
                                                        </a> 
                                                    </li>
                                                   
                                                </ul>
                                                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
                                            
                                                        <li class="flex items-center">
                                                            <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="" target="_blank">
                                                            <a href="https://www.instagram.com/almabeachclub/?hl=es" class="hover:underline me-4 md:me-6 text-white"><i class="fab fa-instagram"></i></a> 
                                                            </a>
                                                        </li>
                                                        <li class="flex items-center">
                                                            <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="" target="_blank">
                                                            <a href="https://es-es.facebook.com/almamojacar/" class="hover:underline me-4 md:me-6 text-white"><i class="fab fa-facebook"></i></a>
                                                            </a>
                                                        </li>
                                                     
                                                 
                                                </ul>
                    </div>
    </div>
</nav>
