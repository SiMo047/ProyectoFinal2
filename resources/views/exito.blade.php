<x-web>

<x-slot name="fondo">

<div class="flex flex-col items-center justify-center h-screen mt-20 mb-60">
            <div class="flex justify-center mb-10">
                <a href="">
                    <img src="{{ asset('img/link.png') }}" style="max-width: 80px; max-height: 80px;" alt="Logo">
                </a>
            </div>
            <div style="width: 480px; height: 503px;">
                <div class="flex justify-center">
                    <video autoplay loop muted style="width: 100%; height: 100%;">
                        <source src="{{ asset('videos/v2.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>




</x-slot>

<x-slot name="seccion">

<div class="mt-20 flex flex-col items-center justify-center h-screen">
    <div class="flex justify-center">
        <p class="items-center text-center mx-auto w-full text-white">ALMA <br> TU DESTINO PARA FIESTAS SIN LÍMITES <br>

            SUMÉRGETE EN UN UNIVERSO DONDE LA MAGIA DE LAS BEBIDAS SE ENFRENTA CON UN AMBIENTE VIBRANTE Y LLENDO DE VIDA <br> EN ALMA <br>
             CADA COPA ES UNA INVITACIÓN A DISFRUTAR DE UN CONCIERTO DE SABORES, MIENTRAS NUESTRO DJ ESTABLECE LA ESCENA PARA UNA NOCHE INOLVIDABLE.
        </p>
    </div>
    
<div class="container mx-auto mt-20 my-20 px-5 py-8 bg-white rounded-lg shadow-lg max-w-xl">

        <h2 class="text-2xl font-bold mb-6 text-center text-black">HAZ TU RESERVA</h2>
        <form method="POST" action="{{ route('reserva.store') }}"class="space-y-4" id="formreserva">
            @csrf

            <div class="mb-4">
                <label class="block text-black text-sm font-bold mb-2" for="nombre">
                    Nombre
                </label>
                <input class="shadow appearance-none border border-gray-300 w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="nombre" type="text" placeholder="" required>
            </div>
            <div class="mb-4">
                <label class="block text-black text-sm font-bold mb-2" for="n_telefono">
                    Número Teléfono
                </label>
                <input class="shadow appearance-none border border-gray-300 w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="n_telefono" name="n_telefono" type="tel"  placeholder="" required>
            </div>
            <div class="mb-4">
                <label class="block text-black text-sm font-bold mb-2" for="n_personas">
                    Número de Personas
                </label>
                <input class="shadow appearance-none border border-gray-300 w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="n_personas" name="n_personas" type="number" min="1" max="18" placeholder="" required>
            </div>
            <div class="mb-4">
                <label class="block text-black text-sm font-bold mb-2" for="fecha">
                    Fecha
                </label>
                <input class="shadow appearance-none border border-gray-300 w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="fecha" name="fecha" type="date" required>
            </div>
            <div class="mb-4">
                <label class="block text-black text-sm font-bold mb-2" for="hora">
                    Hora
                </label>
                <input class="shadow appearance-none border border-gray-300 w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="hora" name="hora" type="time" required>
            </div>
            <div class="mb-4">
                <label class="block text-black text-sm font-bold mb-2" for="zona">
                    Zona
                </label>
                <select class="shadow appearance-none border border-gray-300 w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="zona" name="zona" required>
                    <option value="Terraza">Terraza</option>
                    <option value="Salón">Salón</option>
                </select>
            </div>
            <div class="flex items-center justify-center pt-10">
                <button type="submit" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-black dark:hover:border-gray-600 dark:focus:ring-black">
                    RESERVAR
                </button>
            </div>
        </form>

        <!-- Modal -->
        <div id="popup-modal" tabindex="-1" class="hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50 flex justify-center items-center">
                <div class="relative bg-white rounded-lg shadow-lg p-6">
                    <!-- Botón para cerrar el modal -->
                    <button type="button" class="absolute top-3 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center" data-modal-hide="popup-modal">
                        <i class="fas fa-times"></i>
                        <span class="sr-only">Cerrar modal</span>
                    </button>
                    <!-- Contenido del modal -->
                    <div class="p-4 md:p-5 text-center">
                        <i class="far fa-check-circle text-green-500 text-5xl mb-4"></i>
                        <h3 class="mb-5 text-lg font-normal text-black dark:text-black">Su Reserva se ha Realizado con Éxito!!</h3>
                        <!-- Botón para ir a Home -->
                        <a href="{{ route('home') }}" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Home
                        </a>
                        <!-- Botón para cerrar el modal -->
                        <button type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" data-modal-hide="popup-modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

</div>


        <!--SCRIPT para comprobar fecha y hora -->
        <script>
            let fechaInput = document.getElementById('fecha');
            let horaInput = document.getElementById('hora');

            let hoy = new Date().toISOString().split('T')[0];
            fechaInput.min = hoy ; 

            let horamin="16:00";
            let horamax="01:00";

            horaInput.min=horamin;
            horaInput.max=horamax;

        </script>

         <!--SCRIPT para mostrar el modal al cargar pagina / Evento que ejecuta la funcion hide  -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var modal = document.getElementById('popup-modal');
                modal.classList.remove('hidden'); 
            });

                    // Función para ocultar el modal
            function hideModal() {
                var modal = document.getElementById('popup-modal');
                modal.classList.add('hidden');
            }

            // Evento para cerrar el modal al hacer clic en el botón de cerrar (X)
            document.addEventListener('click', function(event) {
                if (event.target.matches('[data-modal-hide="popup-modal"]')) {
                    hideModal();
                }
            });

        </script>

</x-slot>





</x-web>