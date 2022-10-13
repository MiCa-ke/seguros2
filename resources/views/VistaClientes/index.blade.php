@extends('dashboard')

@section('contenido')

    <div class="mt-4 mx-4">
        <div class="md:col-span-2 xl:col-span-3">
            <h3 class="text-lg font-semibold">Lista de clientes</h3>
        </div>
        <div class="mt-4 mx-4">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                <a href="{{ Route('cliente.create') }}"
                                    class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                    Nuevo Cliente</a>
                            </div>
                            {{-- <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                            <a href="{{ Route('cliente.pdf') }}"
                                class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                Imprimir
                            </a>
                        </div> --}}
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Nombre</th>
                                <th class="px-4 py-3">Apellido P.</th>
                                <th class="px-4 py-3">Apellido M.</th>
                                <th class="px-4 py-3">Telefono</th>
                                <th class="px-4 py-3">Dirección</th>
                                <th class="px-4 py-3">Nacimiento</th>
                                <th class="px-4 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @forelse ($clientes as $p)
                                <tr
                                    class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div> --}}
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $p->nombre }} </p>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">{{ $p->apellido_pa }}</td>
                                    <td class="px-4 py-3 text-sm">{{ $p->apellido_ma }}</td>
                                    <td class="px-4 py-3 text-sm"><p>{{ $p->telefono }}</p></td>
                                    <td class="px-4 py-3 text-sm"<p>{{ $p->direccion }}</p></td>
                                    <td class="px-4 py-3 text-sm"><p>{{ $p->fecha_nacimiento }}</p></td>
                                    <td class="px-4 py-3 text-xs">
                                        <button type="button"
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            <a href="{{ Route('cliente.edit', $p->id) }}">
                                                EDITAR
                                            </a></button>
                                        <button type="button"
                                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                            <form action="{{ Route('cliente.destroy', $p->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="ELIMINAR" class=""
                                                    onclick="return confirm('Desea Eliminar?')">
                                            </form>
                                        </button>
                                    </td>
                                </tr>
                            @empty
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
