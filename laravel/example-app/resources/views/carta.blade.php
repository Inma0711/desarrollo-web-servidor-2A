<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carta</title>
</head>
<body>
    <h2>{{ $mensaje }}</h2>

   
    <table border="1">
        <thead>
            <tr>
                <th> Nombre </th>
                <th> Precio </th>
                <th> Tipo </th>
            </tr>
        </thead>
                @foreach ($platos as $plato)
        <tbody>
            <tr>
                <td>  {{ $plato[0] }} </td>
                <td>  {{ $plato[1] }} </td>
                <td>  {{ $plato[2] }} </td>
            </tr>
                @endforeach
        </tbody>
    </table>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th> Nombre </th>
                <th> Precio </th>
                <th> Tipo </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bebidas as $bebida)
                @php
                    list($l_bebida, $l_precio, $l_tipo) = $bebida
                @endphp
                <tr>
                    <td>{{ $l_bebida }}</td>
                    <td>{{ $l_precio }}</td>
                    <td>{{ $l_tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>