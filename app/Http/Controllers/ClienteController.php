<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Events\BClienteDestroyEvent;
use App\Events\BClienteCreateEvent;
use App\Events\BClienteEditEvent;
use App\Models\BitacoraCliente;
use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Cliente::get();
        return view('VistaClientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VistaClientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        

        $cliente=new Cliente();
        $cliente->nombre = $r->nombre;
        $cliente->apellido_pa = $r->apellido;
        $cliente->apellido_ma = $r->ape_materno;
        $cliente->telefono = $r->tel;
        $cliente->direccion = $r->direc;
        $cliente->fecha_nacimiento = $r->fechanaci;
        $cliente->save();
        $cliente->ip = $r->ip();

        event(new BClienteCreateEvent($cliente));

        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::where('id', $id)->first();
        // dd($cliente);
        return view('VistaClientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, Cliente $cliente)
    {
        $cliente->id = $r->id;
        $cliente->nombre = $r->nombre;
        $cliente->apellido_pa = $r->apellido;
        $cliente->apellido_ma = $r->ape_materno;
        $cliente->telefono = $r->tel;
        $cliente->direccion = $r->direc;
        $cliente->fecha_nacimiento = $r->fechanaci;
        $cliente->save();
        $cliente->ip = $r->ip();
        event(new BClienteEditEvent($cliente));
        return redirect()->route('cliente.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente, Request $r)
    {
        $cliente->ip = $r->ip();
        event(new BClienteDestroyEvent($cliente));
        $cliente->delete();
        return redirect()->route('cliente.index');
    }

    public function pdf(Cliente $cliente)
    {
        $cliente = Cliente::get();

        $pdf = Pdf::loadView('VistaClientes.reporte', ['cliente' => $cliente])
            ->setPaper('letter', 'portrait');

        return $pdf->stream('Lista de clientes' . '.pdf');
    }

    public function bitacora(Cliente $cliente)
    {
        $bitacora = BitacoraCliente::get();

        $pdf = Pdf::loadView('VistaBitacora.BitacoraCliente', ['bitacora' => $bitacora])
            ->setPaper('letter', 'portrait');

        return $pdf->stream('Bitacora de Clientes' . '.pdf');
    }

    public function bitacoraCliente(){
        $cliente = DB::table('bitacora_clientes as bc')->when(Request('user'),function($q){
            return $q->where('bc.user',Request('user'));
        })
        ->when(Request('accion'),function($q){
            return $q->where('bc.accion',Request('accion'));
        })
        ->when(Request('fecha'),function($q){
            return $q->where('bc.fecha',Request('fecha'));
        })
        ->when(Request('hora'),function($q){
            return $q->where('bc.hora',Request('hora'));
        })
        ->when(Request('ip'),function($q){
            return $q->where('bc.ip',Request('ip'));
        })
        ->when(Request('cliente_id'),function($q){
            return $q->where('bc.cliente_id',Request('cliente_id'));
        })
        ->when(Request('nombre'),function($q){
            return $q->where('bc.nombre',Request('nombre'));
        })
        ->when(Request('apellido_pa'),function($q){
            return $q->where('bc.apellido_pa',Request('apellido_pa'));
        })
        ->when(Request('apellido_ma'),function($q){
            return $q->where('bc.apellido_ma',Request('apellido_ma'));
        })
        ->when(Request('telefono'),function($q){
            return $q->where('bc.telefono',Request('telefono'));
        })
        ->when(Request('direccion'),function($q){
            return $q->where('bc.direccion',Request('direccion'));
        })
        ->when(Request('fecha_nacimiento'),function($q){
            return $q->where('bc.fecha_nacimiento',Request('fecha_nacimiento'));
        })
        ->get();
        return view('VistaBitacoras.bitacoraClientes',compact('cliente'));

    }
}
  // ->when(Request('foto_cliente'),function($q){
        //     return $q->where('bc.foto_cliente',Request('foto_cliente'));
        // })
        // ->when(Request('ci_cliente'),function($q){
        //     return $q->where('bc.ci_cliente',Request('ci_cliente'));
        // })