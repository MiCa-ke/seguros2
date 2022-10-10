@extends('dashboard')

@section('contenido')
    {{-- <div class="flex mb-4">
        <div class="w-1/3 p-2 text-center bg-gray-100">
            <a name="" id="" class="btn btn-primary" href="#" type="button">Registrar Ambiente</a>
        </div>
        <div class="w-1/3 p-2 text-center bg-gray-100"></div>
        <div class="w-1/3 p-2 text-center bg-gray-100"></div>
    </div> --}}

    <div class=" flex justify-between items-center mx-5">
        <a class="p-2 mt-4 sm:mt-2  h-full  sm:w-fit text-center font-medium tracking-wide text-white bg-blue-500 rounded-md
                text-sm sm:text-lg
        hover:bg-blue-600 focus:bg-blue-600 focus:outline-none "
            href="{{ Route('ambiente.create') }}">
            Crear Producto
        </a>

        @if (session('RegistroProducto'))
            <p class="text-white w-fit p-2 bg-lime-500 text-sm text-center rounded-xl  h-full sm:w-fit mt-4">
                {{ session('RegistroProducto') }}
                {{-- REgistro exitoso --}}
            </p>
        @endif
    </div>


    <div class=" bg-red-500 my-3 mx-5 overflow-hidden rounded-lg ">
        <!-- reemplace w-full por mx-8 -->
        <div class="  overflow-x-auto">
            <table class="w-full overflow-x-auto ">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-center uppercase border-b dark:border-gray-700 text-gray-300 h-12 bg-gray-800">
                        <!-- dark:text-gray-200 dark:bg-gray-800-->
                        <th class="">Codigo</th>
                        <th class="">Productos</th>
                        <th class="">Precio de Costo</th>
                        <th class="p-1">Precio Con Factura</th>
                        <th class="">Estado</th>
                        <th class="">Fecha de Expiración</th>
                        <th class="">Proveedor</th>
                        {{-- <th class="">Acciones</th> --}}
                    </tr>
                </thead>

                <tbody class=" bg-white divide-2 divide-gray-300 dark:bg-gray-800">

                    {{-- @foreach ($orden as $p) --}}
                    <tr
                        class=" bg-gray-50 text-center dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class=" px-2 text-sm">{{ __('hola') }}</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    {{-- <img class="object-cover w-full h-full rounded-full"
                                            src="{{ asset('img/fotosProductos/' . $p->foto) }}" alt=""
                                            loading="lazy" /> --}}
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                    </div>
                                </div>
                                <div>
                                    <p class="font-semibold">{{ __('hola') }}</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">STOCK: {{ __('hola') }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ __('hola') }}</td>
                        <td class="px-4 py-3 text-sm">
                            {{ __('hola') }}</td>
                        <td class="px-4 py-3 text-xs">
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                {{ __('hola') }} </span>
                        </td>
                        <td class="px-4 py-3 text-sm">{{ __('hola') }}</td>
                        <td class="px-4 py-3 text-sm">{{ __('hola') }}
                            <p class="text-xs text-gray-600 dark:text-gray-400">{{ __('hola') }}
                        </td>

                        {{-- <td class="px-4 py-3 text-xs">
                                <button type="button"
                                    class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100">
                                    <a href="{{ Route('ambiente.show', $p->id) }}">
                                        Ver
                                    </a></button>

                                <button type="button"
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    <a href="{{ Route('Producto.edit', $p->id) }}">
                                        EDITAR
                                    </a></button>

                                <button type="button"
                                    class="mr-3 text-sm bg-red-700 hover:bg-blue-700 text-white px-2 py-1 rounded focus:outline-none focus:shadow-outline">
                                    <form action="{{ Route('Producto.destroy', $p->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="ELIMINAR" class=""
                                            onclick="return confirm('Desea Eliminar?')">
                                    </form>
                                </button>
                            </td> --}}
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <!-- Pagination -->
                <span class="flex col-span-0 mt-0 sm:mt-auto sm:justify-center">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            {{-- {{ $orden->links() }} --}}
                        </ul>
                    </nav>
                </span>
            </div>

        </div>
    </div>
@endsection
