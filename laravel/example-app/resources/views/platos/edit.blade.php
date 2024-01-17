<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('platos.update', ['plato' => $plato->id])}}">
        @csrf
        {{ method_field('PUT')}} 
        <label>Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{$plato->nombre}}"><br><br>
        <label>Precio:</label>
            <input type="text" name="precio" value="{{$plato->precio}}"><br><br>
        <label>Tipo:</label>
            <select name="tipo">
                <option hidden selected value="{{ $plato->tipo}}">{{ $plato->tipo}}</option>
                <option value="1">Racion</option>
                <option value="2">Media Racion</option>
                <option value="3">Tapa</option>
            </select>
            <br><br>
        <input type="submit" value="editar">
    </form>
</body>
</html>