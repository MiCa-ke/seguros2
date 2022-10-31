@extends('dashboard')

@section('contenido')
<form action="{{route('seguro.update',$seguro->id)}}" method="POST" >
    @csrf
    @method('PUT')
    
    <div class="max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-wide underline text-gray-900">Editar Seguro</h1>
        <p class="text-lg italic tracking-tight font-sans  ">Ingresar datos</p>
    </div>

    <div class="relative w-full max-w-full flex-grow flex-1 text-right">
        <a href="{{ route('servicio.show',$seguro->tipoSeguro->id) }}"
            class="bg-gray-800 dark:bg-gray-500 text-white active:bg-white-600 dark:text-gray-100 dark:active:text-gray-100 text-xs font-bold uppercase px-5 py-1 rounded outline-none focus:outline-none mr-3 mb-1 ease-linear transition-all duration-150">
            <i class="fas fa-solid fa-arrow-left"></i>
        </a>
    </div>
    <div class="flex flex-col mt-2">
        <label for="name" class="hidden">Nombre del tipo de Seguro</label>
        <input type="nombre" name="descripcion" id="nombre" value="{{$seguro->descripcion}}"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>
    <div class="flex flex-col mt-2">
        <label for="name" class="hidden">Tipo de Seguro</label>
         <select name="tipo_seguro_id" id="" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
            <option value="{{$seguro->tipoSeguro->id}}" selected>{{$seguro->tipoSeguro->descripcion}}</option>
         </select>
    </div>
    <button type="submit"
            class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Guardar</button>
</form>
@endsection
