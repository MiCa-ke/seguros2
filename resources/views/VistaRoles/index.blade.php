@extends('dashboard')

@section('contenido')
    {{-- <div class="flex justify-end pr-3 mb-3">
        <button type="submit"
            class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
            <a href="{{ Route('Rol.create') }}">CREAR UN ROL</a>
        </button>
    </div> --}}
    <div class="bg-white p-2 rounded-md w-full">
        <div>
            <div class="bg-white flex p-3">
                <h6 class="flex-grow text-2xl font-bold text-center">Roles</h6>
                <button type="button"
                    class="flex-none mr-2 text-x bg-blue-500 hover:bg-indigo-600 text-white py-2 px-2 rounded focus:outline-none focus:shadow-outline">
                    <a href="{{Route('rol.create')}}">
                        CREAR UN ROL
                    </a>
                </button>
            </div>
{{-- ROLES --}}
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    ID
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    ROLES
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    PERMISOS
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    ACCIONES
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($roles as $fila)

                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                    <p class="text-gray-900 whitespace-no-wrap"> {{ $fila->id }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $fila->name }} </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                    @forelse ($fila->permissions as $permission)
                                        <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                            {{ $permission->name }}</span>
                                    @empty
                                        <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                            No hay permisos agregados</span>
                                    @endforelse
                                </td>
                                {{-- acciones --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                    <button type="button"
                                        class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        <a href="{{ Route('rol.edit', $fila->id) }}">
                                            EDITAR
                                        </a></button>
                                        {{-- <button type="button"
                                            class="mr-3 text-sm bg-green-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                            <a href="{{ Route('Rol.edit', $fila->id) }}">
                                                ADD
                                            </a></button> --}}
                                            <button type="button"
                                                class="mr-3 text-sm bg-red-700 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                                <form action="{{ Route('rol.destroy', $fila) }}" method="POST">
                                                    @csrf
                                                    <!-- token de seguridad-->
                                                    @method('DELETE')

                                                    <!-- mostar boton eliminar-->
                                                    <input type="submit" value="ELIMINAR" class=""
                                                        onclick="return confirm('Desea Eliminar?')">
                                                    <!-- volver a preguntar si desea eliminar -->
                                                </form>
                                                </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                    <p class="text-gray-900 whitespace-no-wrap">No hay Roles registrados</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    {{-- PERMISOS --}}
    <div class="bg-white p-2 rounded-md w-full">
        <div>
            <div class="bg-white flex p-3">
                <h6 class="flex-grow text-2xl font-bold text-center">PERMISOS</h6>
                <button type="button"
                    class="mr-2 text-x bg-blue-500 hover:bg-indigo-600 text-white py-2 px-2 rounded focus:outline-none focus:shadow-outline">
                    <a href="{{Route('permissions.create')}}">
                        CREAR PERMISO
                    </a>
                </button>
            </div>

            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    ID
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    PERMISO
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Name Guard
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Created AT
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    ACCIONES
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $permisos as $fila )
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <p class="text-gray-900 whitespace-no-wrap"> {{ $fila->id }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $fila->name }} </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $fila->guard_name }} </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $fila->created_at }} </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <button type="button"
                                            class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                            <a href="{{ Route('permissions.edit', $fila->id) }}">
                                                EDITAR
                                            </a></button>
                                            <button type="button"
                                                class="mr-3 text-sm bg-red-700 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                                <form action="{{ Route('permissions.destroy', $fila->id) }}" method="POST">
                                                    @csrf
                                                    <!-- token de seguridad-->
                                                    @method('DELETE')
                                                    <!-- mostar boton eliminar-->
                                                    <input type="submit" value="ELIMINAR" class=""
                                                        onclick="return confirm('Desea Eliminar? {{$fila->id}}')">
                                                    <!-- volver a preguntar si desea eliminar -->
                                                </form>
                                                </button>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                    <p class="text-gray-900 whitespace-no-wrap">No hay datos</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

{{-- <div class="mt-4 mx-4">
    <div class="md:col-span-2 xl:col-span-3">
        <h3 class="text-lg font-semibold">Lista de Roles</h3>
    </div>
    <div class="mt-4 mx-4">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                            <a href="{{ Route('rol.create') }}"
                                class="bg-blue-500 dark:bg-gray-100 text-white
 active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                Nuevo Rol</a>
                        </div>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Id</th>
                            <th class="px-4 py-3">Nombre</th>
                            <th class="px-4 py-3">Guard</th>
                            <th class="px-4 py-3">Fecha de creacion</th>
                            <th class="px-4 py-3">Permisos</th>
                            <th class="px-4 py-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @forelse ($roles as $rol)
                            <tr
                                class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div>
                                        <p class="font-semibold">{{ $rol->id }} </p>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">{{ $rol->name}}</td>
                                <td class="px-4 py-3 text-sm">{{ $rol->guard_name }}</td>
                                <td class="px-4 py-3 text-sm"><p>{{ $rol->created_at }}</p></td>
                                <td>
                                    @forelse ($rol->permissions as $permission)
                                        <span class="px-2 py-1 font-semibold leading-tight text-sky-400 bg-sky-100 rounded-full dark:bg-sky-700 dark:text-sky-100">{{$permission->name}}</span>
                                    @empty
                                        <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">No tiene permisos</span>
                                    @endforelse
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <button type="button"
                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                        <a href="{{ Route('rol.edit', $rol->id) }}">
                                            EDITAR
                                        </a></button>
                                    <button type="button"
                                        class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                        <form action="{{ Route('rol.destroy', $rol->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="ELIMINAR" class=""
                                                onclick="return confirm('Desea Eliminar?')">
                                        </form>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            No hay roles registrados
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
</div> --}}
@endsection

