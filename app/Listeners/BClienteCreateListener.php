<?php

namespace App\Listeners;

use App\Models\BitacoraCliente;
use Illuminate\Support\Facades\Auth;
use App\Events\BClienteCreateEvent;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BClienteCreateListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\BClienteCreateEvent  $event
     * @return void
     */
    public function handle(BClienteCreateEvent $event)
    {
        // dd($event);

        $cliente = new BitacoraCliente();
        $cliente->user=Auth::user()->name;             //quien hizo
        $cliente->accion = 'create';                   //que hizo
        $cliente->fecha = now();                       //cuando hizo
        $cliente->hora = now();                         //a que hora lo hizo
        $cliente->ip = $event->bclientecreate->ip;
        $cliente->cliente_id =$event->bclientecreate->id;       //datos de la tabla que se asigno
        $cliente->nombre = $event->bclientecreate->nombre;
        $cliente->apellido_pa = $event->bclientecreate->apellido_pa;
        $cliente->apellido_ma = $event->bclientecreate->apellido_ma;
        $cliente->telefono = $event->bclientecreate->telefono;
        $cliente->direccion = $event->bclientecreate->direccion;
        $cliente->fecha_nacimiento = $event->bclientecreate->fecha_nacimiento;
        $cliente->save();
    }
}
