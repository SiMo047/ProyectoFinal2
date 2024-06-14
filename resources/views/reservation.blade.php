<x-web>

<x-slot name="fondo">

<div class="flex flex-col items-center justify-center h-screen mt-20 mb-60">
            <div class="flex justify-center mb-10">
                <a href="">
                    <img src="{{ asset('img/link2.png') }}" style="max-width: 80px; max-height: 80px;" alt="Logo">
                </a>
            </div>
            <div style="width: 480px; height: 503px;">
                <div class="flex justify-center">
                    <img src="{{ asset('img/f11.jpg') }}" style="width: 100%; height: 100%;">

                    
                </div>
            </div>
        </div>




</x-slot>

<x-slot name="seccion">

<div class="mt-20 flex flex-col items-center justify-center h-screen">
    <div class="flex justify-center">
        <p class="items-center text-center mx-auto w-full text-white font-light leading-snug">ALMA <br>  TU DESTINO PARA FIESTAS SIN LÍMITES <br>

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

</x-slot>





</x-web>