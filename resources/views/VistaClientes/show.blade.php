@extends('dashboard')

@section('contenido')

<form action="{{route('permissions.store')}}" method="POST" >
    @csrf

    <div class="max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-wide underline text-gray-900">Permisos</h1>
        <p class="text-lg italic tracking-tight font-sans  ">Estos son los permisos</p>
    </div>

@endsection