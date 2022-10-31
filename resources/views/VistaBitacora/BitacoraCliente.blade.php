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
            BITACORA CLIENTES - {{date('d-m-Y')}}
        </p>
        <table class="items-table mt" cellpadding="0" cellspacing="0">
            <thead>
                <tr class="heading">
                    <th class="text-left">#</th>
                    <th class="text-left">USUARIO</th>
                    <th class="text-left">ACCION</th>
                    <th class="text-left">FECHA</th>
                    <th class="text-left">HORA</th>
                    <th class="text-left">IP-CLIENTE</th>
                    <th class="text-left">ID-CLIENTE</th>
                    <th class="text-left">NOMBRE CLIENTE</th>
                    <th class="text-left">TELEFONO</th>
                    <th class="text-left">DIRECCION</th>
                    <th class="text-left">FECHA DE NACIMIENTO</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 0;
                    @endphp
                @forelse ($bitacora as $c)
                <tr class="item">

                    <td>{{ $i + 1 }}</td>
                    <td>{{$c->user}}</td>
                    <td>{{$c->accion}}</td>
                    <td>{{$c->fecha}}</td>
                    <td>{{$c->hora}}</td>
                    <td>{{$c->ip}}</td>
                    <td>{{$c->cliente_id}}</td>
                    <td>{{$c->nombre}} {{$c->apellido_pa}} {{$c->apellido_ma}}</td>
                    <td>{{$c->telefono}}</td>
                    <td>{{$c->direccion}}</td>
                    <td>{{$c->fecha_nacimiento}}</td>
                @empty
                    <td>{{ $i + 1 }}</td>
                    <th>USUARIO</th>
                    <th>ACCION</th>
                    <th>FECHA</th>
                    <th>HORA</th>
                    <th>IP-CLIENTE</th>
                    <th>ID-CLIENTE</th>
                    <th>NOMBRE</th>
                    <th>TELEFONO</th>
                    <th>DIRECCION</th>
                    <th>FECHA DE NACIMIENTO</th>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>