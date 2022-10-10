@extends('dashboard')

@section('contenido')

<form action="{{route('cliente.store')}}" method="POST" >
    @csrf

    @method('POST')
    
    <div class="flex flex-col mt-2">
        <label for="nombre" class="hidden">Nombre</label>
        <input type="nombre" name="nombre" id="nombre" placeholder="Nombre"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="flex flex-col mt-2">
        <label for="apellido" class="hidden">Apellido Paterno</label>
        <input type="nombre" name="apellido" id="nombre" placeholder="Apellido"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <button type="submit"
            class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Registrar</button>
</form>
@endsection
