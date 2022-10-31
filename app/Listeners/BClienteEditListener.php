<?php

namespace App\Listeners;

use App\Events\BClienteEditEvent;
use Illuminate\Support\Facades\Auth;
use App\Models\BitacoraCliente;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BClienteEditListener
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
     * @param  \App\Events\BClienteEditEvent  $event
     * @return void
     */
    public function handle(BClienteEditEvent $event)
    {
         // dd($event);

         $cliente = new BitacoraCliente();
         $cliente->user=Auth::user()->name;             //quien hizo
         $cliente->accion = 'edit';                   //que hizo
         $cliente->fecha = now();                       //cuando hizo
         $cliente->hora = now();                         //a que hora lo hizo
         $cliente->ip = $event->bclienteedit->ip;
         $cliente->cliente_id =$event->bclienteedit->id;       //datos de la tabla que se asigno
         $cliente->nombre = $event->bclienteedit->nombre;
         $cliente->apellido_pa = $event->bclienteedit->apellido_pa;
         $cliente->apellido_ma = $event->bclienteedit->apellido_ma;
         $cliente->telefono = $event->bclienteedit->telefono;
         $cliente->direccion = $event->bclienteedit->direccion;
         $cliente->fecha_nacimiento = $event->bclienteedit->fecha_nacimiento;
         $cliente->save();
    }
}
