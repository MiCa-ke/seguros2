@extends('dashboard')

@section('contenido')
@if (session('status'))
<div class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100  dark:bg-green-700 dark:text-green-100 rounded">
    {{session('status')}}
</div>    
@endif
<div class="mt-4 mx-4">
        <div class="md:col-span-2 xl:col-span-3">
            <h3 class="text-lg font-semibold">Tipo de Serguro</h3>
        </div>
        <div class="mt-4 mx-4">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                <a href="{{ route('servicio.create') }}"
                                    class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                    Nuevo Tipo Seguro</a>
                            </div>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Nro</th>
                                <th class="px-4 py-3">Descripcion</th>
                                <th class="px-4 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @php
                                $n = 1;
                            @endphp
                            @forelse ($tipoSeguros as $tp)
                                <tr class="seleccionar bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400"
                                    id="{{ $tp->id }}">
                                    <td class="px-4 py-3">
                                        <div>
                                            <p class="font-semibold">{{ $n }} </p>
                                        </div>
                                    </td>

                                    <td class="px-4 py-3 text-sm">{{ $tp->descripcion }}</td>

                                    <td class="px-4 py-3 text-xs">
                                        <button type="button"
                                            class="px-2 py-1 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-full">
                                            <a href="{{ Route('servicio.show', $tp->id) }}">
                                                VER
                                            </a></button>
                                        <button type="button"
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            <a href="{{ Route('servicio.edit', $tp->id) }}">
                                                EDITAR
                                            </a></button>
                                        <button type="button"
                                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                            <form action="{{ Route('servicio.destroy', $tp->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="ELIMINAR" class=""
                                                    onclick="return confirm('Desea Eliminar?')">
                                            </form>
                                        </button>
                                    </td>
                                </tr>
                                @php
                                    $n++;
                                @endphp
                            @empty
                                No hay tipos de seguro registrados
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div
                    class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <!-- Pagination -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>
        $(document).ready(function() {

        });
    </script>
@stop
