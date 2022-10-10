@extends('dashboard')

@section('contenido')
<a href="{{route('ambiente.index')}}" class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">
    Volver</a>
    <form class="p-6 flex flex-col justify-center" action="{{ Route('ambiente.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="flex flex-col mt-2">
            <label for="ci" class="text-gray-800 text-sm font-semibold pl-2 leading-tight tracking-normal">
                Sucursal:</label>
            <input type="text" name="sucursal" id="sucursal" placeholder="Sucursal"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <div class="flex flex-col mt-2">
            <label for="direccion" class="text-gray-800 text-sm font-semibold pl-2 leading-tight tracking-normal">
                Dirección</label>
            <input type="text" name="direccion" id="direccion" placeholder="Dirección"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <div class="flex flex-col mt-2">
            <label for="nombre" class="text-gray-800 text-sm font-semibold pl-2 leading-tight tracking-normal">
                Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <div class="flex flex-col mt-2">
            <label for="empresa" class="text-gray-800 text-sm font-semibold pl-2 leading-tight tracking-normal">
                País</label>
            <input type="text" name="pais" id="pais" placeholder="Pais"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <button type="submit"
            class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Registrar</button>
    </form>
@endsection
