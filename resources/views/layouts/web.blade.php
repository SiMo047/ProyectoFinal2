<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="icon" href="{{ asset('img/link.png') }}">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
    <link rel="apple-touch-icon"sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('assets/styles/tailwind.css')}}" />
  

    
    <title>Alma Beach Club</title>
   
  </head>
  <body class="bg-black text-blueGray-700 antialiased">
    @include('layouts.nav')
    <main>
      <div class="relative flex content-center items-center justify-center min-h-screen-75 pb-4">
                  <!--Div foto de fondo -->
                  
                  {{$fondo}}



            
      </div>
      <section class="relative  mb-4 py-16 lg:py-20">
       

                {{$seccion}}
     
        
      </section>
   


      
      
    </main>


<!-----------------------FOOTER------------------------>

   

<footer class="m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img  src="{{ asset('img/logo.png') }}" class="h-20" alt="" />
            </a>

            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="https://www.instagram.com/almabeachclub/?hl=es" class="hover:underline me-4 md:me-6 text-white"><i class="fab fa-instagram"></i></a> 
                </li>
                <li>
                    <a href="https://es-es.facebook.com/almamojacar/" class="hover:underline me-4 md:me-6 text-white"><i class="fab fa-facebook"></i></a>
                </li>
                
             @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}" class="hover:underline me-4 md:me-6 text-white">
                                <i class="fas fa-book-open"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('milogout') }}" class="hover:underline me-4 md:me-6 text-white">
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="hover:underline me-4 md:me-6 text-white">
                                <i class="fas fa-users-cog"></i>
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="hover:underline me-4 md:me-6 text-white">
                                    <i class="fas fa-user-plus"></i>
                                </a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
              
           
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">Alma Beach Club | All Rights Reserved.</span>
    </div>
</footer>


 
  
  </body>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
 
  <script>
    /* Make dynamic date appear */
    (function () {
      if (document.getElementById("get-current-year")) {
        document.getElementById("get-current-year").innerHTML =
          new Date().getFullYear();
      }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
      let element = event.target;
      while (element.nodeName !== "A") {
        element = element.parentNode;
      }
      Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start"
      });
      document.getElementById(dropdownID).classList.toggle("hidden");
      document.getElementById(dropdownID).classList.toggle("block");
    }
  </script>
</html>
