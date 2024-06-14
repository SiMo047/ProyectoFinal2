<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

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