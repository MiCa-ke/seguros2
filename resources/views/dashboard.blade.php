<x-app-layout>
    <x-slot name="header">
        <marquee behavior="" direction="left" scrolldelay="180">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Bienvenido') }} {{ Auth::user()->name }} | {{date('d-m-Y')}} | Sistema de Seguros Automovilisticos
            </h2>
        </marquee>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @yield('contenido')
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    {{-- <img src="{{asset('img/img01.jpg')}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" width="200" alt=""> --}}
                {{-- </div>
            </div>
        </div>
    </div> --}} 
</x-app-layout>
