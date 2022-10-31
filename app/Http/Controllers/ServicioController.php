<?php

namespace App\Http\Controllers;

use App\Models\Seguro;
use App\Models\Servicio;
use App\Models\TipoSeguro;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoSeguros = TipoSeguro::all();
        return view('VistaServicios.index', compact('tipoSeguros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VistaServicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string'
        ]);
        $tp = TipoSeguro::create($request->all());
        
        return redirect()->route('servicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoSeguro = TipoSeguro::findOrFail($id);
        return view('VistaServicios.show-servicios', compact('tipoSeguro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoSeguro=TipoSeguro::findOrFail($id);
        return view('VistaServicios.edit',compact('tipoSeguro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipoSeguro=TipoSeguro::findOrFail($id);
        $request->validate([
            'descripcion'=>'required|string'
        ]);
        $tipoSeguro->update($request->all());
        return redirect()->route('servicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tp=TipoSeguro::findOrFail($id);
        $tp->delete();
        return redirect()->route('servicio.index');
    }
}
