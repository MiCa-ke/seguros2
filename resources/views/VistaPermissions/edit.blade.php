@extends('dashboard')

@section('contenido')
<form action="{{route('permissions.update', $permission->id)}}" method="POST" >
    @csrf

    <div class="max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-wide underline text-gray-900">Permisos</h1>
        <p class="text-lg italic tracking-tight font-sans  ">Editar Nombre de los permisos</p>
    </div>

    @method('PUT')
    <input type="text" name="id" value="{{$permission->id}}" class="hidden">

    <div class="flex flex-col mt-2">
        <label for="name" class="hidden">Permiso</label>
        <input type="nombre" name="name" id="nombre" placeholder="Nombre de Permiso" value="{{$permission->name}}"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <button type="submit"
            class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Editar</button>
</form>
@endsection