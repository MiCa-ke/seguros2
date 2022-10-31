<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ public_path('css/invoice.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="invoice-box">
        {{-- invoice items --}}
        <p class="text-center">
            Reporte Lista de Clientes - {{date('d-m-Y')}}
        </p>
        <table class="items-table mt" cellpadding="0" cellspacing="0">
            <thead>
                <tr class="heading">
                    <th class="text-left">#</th>
                    <th class="text-left">NOMBRE</th>
                    <th class="text-left">TELEFONO</th>
                    <th class="text-left">DIRECCION</th>
                    <th class="text-left">FECHA DE NACIMIENTO</th>
                </tr>
            </thead>
            @php
                $i = 0;
            @endphp
            @forelse ($cliente as $c)
                <td>{{ $i + 1 }}</td>
                <td>{{$c->nombre}} {{$c->apellido_pa}} {{$c->apellido_ma}}</td>
                <td>{{$c->telefono}}</td>
                <td>{{$c->direccion}}</td>
                <td>{{$c->fecha_nacieminto}}</td>
            @empty
                <td>{{ $i + 1 }}</td>
                <td>Nombre del cliente</td>
                <td>telefono del cliente</td>
                <td>direccion</td>
                <td>Fecha de nacimieno</td>
            @endforelse
        </table>
    </div>
</body>
</html>