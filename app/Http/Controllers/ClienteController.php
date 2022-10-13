<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

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
        return redirect()->route('cliente.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
