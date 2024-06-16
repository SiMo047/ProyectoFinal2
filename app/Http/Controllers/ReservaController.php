<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::paginate(10);

        return  view('dashboard',compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //datos de comprobacion de aforo
        $hora=$request->hora;
        $fecha=$request->fecha;
        $n_personas=$request->n_personas; 
        $zona=$request->zona; 
           
        //Compruebo la zona y segun la zona aplicamos un aforo u otro .
        if ($zona == 'Salón'){
            $aforo_max = 28;
        }else if ($zona =='Terraza'){
            $aforo_max = 20;
        }

           //Calculo el rango de hora (la comprobacion del aforo se va hacer entre ese rango )
           $hora_inicio= Carbon::parse($hora)->startOfHour();
           $hora_fin=$hora_inicio->copy()->addHour()->subMinute();//añado una hora y resto un min para que sea a 59 min 

           //Consulta para obtener las reservas , para luego sumar n personas 
           $reservas = Reserva::where('fecha', $fecha)
           ->where('zona', $zona)
           ->whereBetween('hora', [$hora_inicio, $hora_fin])
           ->get();

            //sumar las personas de las reservas obtenidas en la consulta  
            $total_personas = $reservas->sum('n_personas') + $n_personas;

                   //Finalmente verificamos si el total de personas supera el aforo maximo 
                   if ($total_personas > $aforo_max) {
                    return view('aforo_completo');
                }
        

            $reserva = new Reserva();
            $reserva->nombre = $request->nombre;
            $reserva->n_telefono = $request->n_telefono;
            $reserva->n_personas = $request->n_personas;
            $reserva->fecha = $request->fecha;
            $reserva->hora = $request->hora;
            $reserva->zona = $request->zona;
    
            $reserva-> save();
            return view('exito');

            
    }



    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reserva=Reserva::where('id', $id)->first();
       

        return view('editreserva',compact( 'reserva'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $reserva=Reserva::where('id', $id)->first();
        $reserva->nombre = $request->nombre;
        $reserva->n_telefono = $request->n_telefono;
        $reserva->n_personas = $request->n_personas;
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
        $reserva->zona = $request->zona;

        $reserva->save();

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reserva=Reserva::where('id', $id)->first();
        $reserva->delete();
        return redirect()->route('dashboard');
    }
}
