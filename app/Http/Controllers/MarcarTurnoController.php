<?php

namespace App\Http\Controllers;

use App\Models\marcar_turno;
use Illuminate\Http\Request;

class MarcarTurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('VistaPrincipal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\marcar_turno  $marcar_turno
     * @return \Illuminate\Http\Response
     */
    public function show(marcar_turno $marcar_turno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\marcar_turno  $marcar_turno
     * @return \Illuminate\Http\Response
     */
    public function edit(marcar_turno $marcar_turno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\marcar_turno  $marcar_turno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, marcar_turno $marcar_turno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\marcar_turno  $marcar_turno
     * @return \Illuminate\Http\Response
     */
    public function destroy(marcar_turno $marcar_turno)
    {
        //
    }
}
