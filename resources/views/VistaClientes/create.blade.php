@extends('dashboard')

@section('contenido')

<form action="{{route('cliente.store')}}" method="POST" >
    @csrf

        <div class="max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-wide underline text-gray-900">Cliente</h1>
            <p class="text-lg italic tracking-tight font-sans  ">Ingresar datos</p>
        </div>

    @method('POST')

    <div class="flex flex-col mt-2">
        <label for="nombre" class="hidden">Nombre</label>
        <input type="nombre" name="nombre" id="nombre" placeholder="Nombre"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="apellido" class="hidden">Apellido Paterno</label>
        <input type="nombre" name="apellido" id="nombre" placeholder="Apellido Paterno"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="ape_materno" class="hidden">Apellido Materno</label>
        <input type="nombre" name="ape_materno" id="nombre" placeholder="Apellido Materno"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="tel" class="hidden">Telefono</label>
        <input type="nombre" name="tel" id="nombre" placeholder="Telefono"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="direc" class="hidden">Direccion</label>
        <input type="nombre" name="direc" id="nombre" placeholder="Direccion"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="fechanaci" class="hidden">Fecha de Nacimiento</label>
        <input type="nombre" name="fechanaci" id="nombre" placeholder="Fecha de Nacimiento YY-mm-dd"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <button type="submit"
            class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Registrar</button>
</form>
@endsection
