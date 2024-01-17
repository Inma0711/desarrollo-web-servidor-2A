<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('platos.store')}}">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre"><br><br>
        <label>Precio:</label>
        <input type="text" name="precio"><br><br>
        <label>Tipo:</label>
        <select name="tipo">
            <option value="1">Racion</option>
            <option value="2">Media Racion</option>
            <option value="3">Tapa</option>
        </select>
        <br><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>