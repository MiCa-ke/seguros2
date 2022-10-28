@extends('dashboard')

@section('contenido')

<form action="{{route('rol.store')}}" method="POST" >
    @csrf

    <div class="max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-wide underline text-gray-900">Roles</h1>
        <p class="text-lg italic tracking-tight font-sans  ">Ingresar nuevo rol y asigna sus permisos</p>
    </div>

    @method('POST')
    
    <div class="flex flex-col mt-2">
        <label for="name" class="hidden">Nombre del rol</label>
        <input type="nombre" name="name" id="nombre" placeholder="Nombre del rol"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
    </div>

    <div class="border-t border-gray-200 px-4 py-6">
        <h2 class="flow-root">
            <span class="font-2xl text-gray-900">Permisos</span>
        </h2>
            <div class="pt-6" id="filter-section-mobile-0">
                <div class="space-y-6">
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($permissions as $id => $permission)

                            <div class="flex items-center">
                                <input id="filter-mobile-color-0" name="permissions[]" value="{{ $id }}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">{{ $permission }}</label>
                            </div>
                        
                        @endforeach
                    </tbody>
                </div>
            </div>
    </div>


    <button type="submit"
            class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Guardar</button>
</form>
@endsection

