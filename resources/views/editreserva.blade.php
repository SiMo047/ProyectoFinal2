<x-dash>

<div class="container mx-auto mt-20 my-20 px-5 py-8 bg-white rounded-lg shadow-lg max-w-xl">

    <h2 class="text-2xl font-bold mb-6 text-center text-black">MODIFICAR RESERVA</h2>
    <form method="POST" action="{{ route('updatereserva',  $reserva->id) }}" class="space-y-4" id="formreserva">
        @csrf
     

        <div class="mb-4">
            <label class="block text-black text-sm font-bold mb-2" for="nombre">
                Nombre
            </label>
            <input class="shadow appearance-none border border-gray-300 w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="nombre" type="text" placeholder="" value="{{$reserva->nombre}}" required>
        </div>
        <div class="mb-4">
            <label class="block text-black text-sm font-bold mb-2" for="n_telefono">
                Número Teléfono
            </label>
            <input class="shadow appearance-none border border-gray-300 w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="n_telefono" name="n_telefono" type="tel" placeholder="" value="{{ $reserva->n_telefono }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-black text-sm font-bold mb-2" for="n_personas">
                Número de Personas
            </label>
            <input class="shadow appearance-none border border-gray-300 w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="n_personas" name="n_personas" type="number" min="1" max="18" placeholder="" value="{{ $reserva->n_personas }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-black text-sm font-bold mb-2" for="fecha">
                Fecha
            </label>
            <input class="shadow appearance-none border border-gray-300 w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="fecha" name="fecha" type="date" value="{{ $reserva->fecha }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-black text-sm font-bold mb-2" for="hora">
                Hora
            </label>
            <input class="shadow appearance-none border border-gray-300 w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="hora" name="hora" type="time" value="{{ $reserva->hora }}" required>
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
                MODIFICAR RESERVA
            </button>
        </div>
    </form>
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









</x-dash>