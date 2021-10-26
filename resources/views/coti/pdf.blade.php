<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
    <h2>LISTA DE COTIZACIONES</h2>

    <table class="table table-striped table-hover" >
        <thead class="thead ">
            <tr>
                <th>Cliente</th>
                <th>Asignado</th>
                <th>Expira</th>
                <th>Moneda</th>
                <th>Tiempoentrega</th>
                <th>Formapago</th>
                <th>Estado</th>
                <th>Piepagina</th>
                <th>Condiciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cotis as $coti)
                <tr>
                    <td>{{ $coti->cliente->contacto }}</td>
                    <td>{{ $coti->user->name }}</td>
                    <td>{{ $coti->expira->dias }}</td>
                    <td>{{ $coti->moneda->monedas }}</td>
                    <td>{{ $coti->tiempoentrega->dias }}</td>
                    <td>{{ $coti->formapago->pago }}</td>
                    <td>{{ $coti->estado->situacion }}</td>
                    <td>{{ $coti->piepagina->piedepagina }}</td>
                    <td>{{ $coti->condicion->condicionesgenerales }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
