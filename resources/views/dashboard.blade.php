<x-dash>

<x-tabla>
                    <x-slot name="cabecera">
                    
                    <x-tabla.th>Nombre</x-tabla.th>
                    <x-tabla.th>Contacto</x-tabla.th>
                    <x-tabla.th>Nº Personas</x-tabla.th>
                    <x-tabla.th>Fecha</x-tabla.th>
                    <x-tabla.th>Hora</x-tabla.th>
                    <x-tabla.th>Zona</x-tabla.th>
                    <x-tabla.th>...</x-tabla.th>
                    
                    </x-slot>

                    <x-slot name="tbody">

                    @foreach($reservas as $reserva)
                        <tr>
                        <x-tabla.td>{{ $reserva->nombre }}</x-tabla.td>
                        <x-tabla.td>{{ $reserva->n_telefono }}</x-tabla.td>
                        <x-tabla.td>{{ $reserva->n_personas }}</x-tabla.td>
                        <x-tabla.td>{{ $reserva->fecha }}</x-tabla.td>
                        <x-tabla.td>{{ $reserva->hora }}</x-tabla.td>
                        <x-tabla.td>{{ $reserva->zona }}</x-tabla.td>
                        <x-tabla.td>   
                       <a href="{{ route('modreserva',['id'=>$reserva->id]) }}"><i class="zmdi zmdi-edit"></i></a>
                       <a href="{{ route('delreserva',['id'=>$reserva->id]) }}"><i class="zmdi zmdi-delete"></i></a>
                   </x-tabla.td>
                        </tr>
                    @endforeach    

                    <x-slot name="tlink">
                        {{$reservas->links()}}
                    </x-slot>
                    </x-slot>
</x-tabla>
                
            













</x-dash>