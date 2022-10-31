<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Auth;
use App\Models\BitacoraCliente;
use App\Events\BClienteDestroyEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BClienteDestroyListener
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
     * @param  \App\Events\BClienteDestroyEvent  $event
     * @return void
     */
    public function handle(BClienteDestroyEvent $event)
    {
        // dd($event);

        $cliente = new BitacoraCliente();
        $cliente->user=Auth::user()->name;             //quien hizo
        $cliente->accion = 'destroy';                  //que hizo
        $cliente->fecha = now();                       //cuando hizo
        $cliente->hora = now();                        //a que hora lo hizo
        $cliente->ip = $event->bclientedestroy->ip;
        $cliente->cliente_id =$event->bclientedestroy->id;       //datos de la tabla que se asigno
        $cliente->nombre = $event->bclientedestroy->nombre;
        $cliente->apellido_pa = $event->bclientedestroy->apellido_pa;
        $cliente->apellido_ma = $event->bclientedestroy->apellido_ma;
        $cliente->telefono = $event->bclientedestroy->telefono;
        $cliente->direccion = $event->bclientedestroy->direccion;
        $cliente->fecha_nacimiento = $event->bclientedestroy->fecha_nacimiento;
        $cliente->save();
    }
}
