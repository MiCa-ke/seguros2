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
            'nombre' => 'required|string',
            'descripcion' => 'required|string'
        ]);
        $tp = TipoSeguro::create($request->all());

        session()->flash('status', '¡Tipo de servicio creado exitosamente!');
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
        return view('VistaServicios.show-seguros', compact('tipoSeguro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoSeguro = TipoSeguro::findOrFail($id);
        return view('VistaServicios.edit', compact('tipoSeguro'));
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
        $tipoSeguro = TipoSeguro::findOrFail($id);
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string'
        ]);
        $tipoSeguro->update($request->all());
        session()->flash('status', '¡Tipo de servicio actualizado exitosamente!');

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
        $tp = TipoSeguro::findOrFail($id);
        $tp->delete();
        session()->flash('eliminar', '¡Se eliminó correctamente el Tipo de Servicio!');
        return redirect()->route('servicio.index');
    }

    public function segurosCreate($id)
    {
        $ts = TipoSeguro::findOrFail($id);
        return view('VistaServicios.create-seguros', compact('ts'));
    }
    public function segurosStore(Request $request)
    {

        $request->validate([
            'codigo' => "required|regex:/^[A-Z]+[-][0-9]+$/|unique:seguros,codigo,id",
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'tipo_seguro_id' => 'required|exists:tipo_seguros,id'
        ], [
            'codigo.unique' => 'Error código de seguro ya existe en la base de datos',
            'codigo.regex' => 'Error el formato del código no es válido'
        ]);
        Seguro::create($request->all());
        session()->flash('status', '¡Servicio creado exitosamente!');

        return redirect()->route('servicio.show', $request->tipo_seguro_id);
    }
    public function segurosEdit($id)
    {
        $seguro = Seguro::findOrFail($id);
        return view('VistaServicios.edit-seguros', compact('seguro'));
    }
    public function segurosUpdate(Request $request, $id)
    {

        $seguro = Seguro::findOrFail($id);
        $request->validate([ 
            'codigo' => "required|regex:/^[A-Z]+[-][0-9]+$/|unique:seguros,codigo,id",
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'tipo_seguro_id' => 'required|exists:tipo_seguros,id'
        ], [
            'codigo.unique' => 'Error código de seguro ya existe en la base de datos',
            'codigo.regex' => 'Formato del código invalido, debe contener un número por lo menos'
        ]);

        $seguro->update($request->all());

        session()->flash('status', '¡Servicio actualizado exitosamente!');
        return redirect()->route('servicio.show', $request->tipo_seguro_id);
    }
    public function segurosDestroy($id)
    {
        $seguro = Seguro::findOrFail($id);
        $seguro->delete();
        session()->flash('eliminar', '¡Se eliminó correctamente el Servicio!');
        return redirect()->route('servicio.show', $seguro->tipoSeguro->id);
    }
}
