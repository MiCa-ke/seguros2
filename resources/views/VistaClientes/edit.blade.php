@extends('dashboard')

@section('contenido')
<form action="{{route('cliente.update', $cliente->id)}}" method="POST" >
    @csrf

    @method('PUT')
    <input type="text" name="id" value="{{$cliente->id}}" class="hidden">

    <div class="flex flex-col mt-2">
        <label for="nombre" class="hidden">Nombre</label>
        <input type="nombre" name="nombre" id="nombre" placeholder="Nombre" value="{{$cliente->nombre}}"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="apellido" class="hidden">Apellido Paterno</label>
        <input type="nombre" name="apellido" id="nombre" placeholder="Apellido" value="{{$cliente->apellido_pa}}"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="ape_materno" class="hidden">Apellido Materno</label>
        <input type="nombre" name="ape_materno" id="nombre" placeholder="Apellido Materno" value="{{$cliente->apellido_ma}}"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="tel" class="hidden">Telefono</label>
        <input type="nombre" name="tel" id="nombre" placeholder="Telefono" value="{{$cliente->telefono}}"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="direc" class="hidden">Direccion</label>
        <input type="nombre" name="direc" id="nombre" placeholder="Direccion" value="{{$cliente->direccion}}"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="fechanaci" class="hidden">Fecha de Nacimiento</label>
        <input type="nombre" name="fechanaci" id="nombre" placeholder="Fecha de Nacimiento YY-mm-dd" value="{{$cliente->fecha_nacimiento}}"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <button type="submit"
            class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Editar</button>
</form>
@endsection
