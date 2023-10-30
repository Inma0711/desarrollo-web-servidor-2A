<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Peliculas</title>
    <?php require 'pelicula.php' ?>

</head>

<body>
    <?php

    $peliculas = [];

    $pelicula1 = new Pelicula(1, "Spiderman", "2020-01-01", "7");
    array_push($peliculas, $pelicula1);
    $pelicula2 = new Pelicula(2, "Piratas_Caribe", "2006-08-11", "12");
    array_push($peliculas, $pelicula2);
    $pelicula3 = new Pelicula(1, "Avatar", "2009-12-18", "12");
    array_push($peliculas, $pelicula3);

    ?>

    <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Estreno</th>
                <th>Edad recomendada</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($peliculas as $pelicula) {
                echo "<tr>
                <td>" . $pelicula->id_pelicula . "</td>
                <td>" . $pelicula->titulo . "</td>
                <td>" . $pelicula->fecha_estreno . "</td>
                <td>" . $pelicula->edad_recomendada . "</td>
              </tr>";
            }

            ?>
        </tbody>
    </table>
</body>

</html>