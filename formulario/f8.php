<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require '../funciones/muchas_funciones.php'; ?>
    <?php require '../funciones/bases_de_datos_peli.php'; ?>
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_id_pelicula = depurar($_POST["pelicula"]);
        $temp_titulo = depurar($_POST["titulo"]);
        $temp_fecha_estreno = depurar($_POST["estreno"]);
        $temp_edad_recomendada = depurar($_POST["edad_recomendada"]);

        # Comprobacion ID
        if (strlen($temp_id_pelicula) == 0) { //Comprobar longitud de una cadena
            $err_id = "Este campo es obligatorio";
        } else {
            if (strlen($temp_id_pelicula) > 8 || strlen($temp_id_pelicula) < 0) {
                $err_id = "El nombre no puede tener más de 8 caracteres";
            } else {
                $id_pelicula = $temp_id_pelicula;
            }
        }

        # Comprobacion titulo
        if (strlen($temp_titulo) == 0) {
            $err_titulo = "Este campo es obligatorio";
        } else {

        }

    }
    ?>

    <form action="" method="post">
        <fieldset>
            <label>Pelicula id: </label>
            <input type="number" name="pelicula">
            <?php if (isset($err_id)) echo $err_id ?>
            <br><br>
            <label>Titulo: </label>
            <input type="text" name="titulo">
            <br><br>
            <label>Estreno: </label>
            <input type="date" name="estreno">
            <br><br>
            <label>Edad recomendada: </label>
            <input type="range" name="edad_recomendada" value="3">
            <br><br>
            <input type="submit" value="Registrarse">
        </fieldset>
    </form>

    <?php
    if (isset($id_pelicula) && isset($titulo) && isset($fecha_estreno) && isset($edad_recomendada)) {
        echo "<h3>Pelicula: $id_pelicula</h3>";
        echo "<h3>Titulo: $titulo</h3>";
        echo "<h3>Estreno: $fecha_estreno</h3>";
        echo "<h3>Edad recomendada: $edad_recomendada</h3>";

        $sql = "INSERT INTO peliculas (id_pelicula, titulo, fecha_estreno, edad_recomendada)
                VALUES ('$id_pelicula', '$titulo', '$fecha_estreno', '$edad_recomendada')";

        $conexion->query($eql);
    }
    ?>

</body>

</html>