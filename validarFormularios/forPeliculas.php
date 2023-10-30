<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require '../funciones/muchas_funciones.php'; ?>
    <?php require '../funciones/conexion_peliculas.php'; ?>
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_id_pelicula = depurar($_POST["pelicula"]);
        $temp_titulo = depurar($_POST["titulo"]);
        $temp_fecha_estreno = depurar($_POST["estreno"]);
        if (isset($_POST["edad_recomendada"])) {      //Esto lo hacemos porque es un select, y si no marcamos nada entonces nos pondra el primero de forma predeterminada
            $temp_edad_recomendada = depurar($_POST["edad_recomendada"]);
        } else {
            $temp_edad_recomendada = "";
        }


        # VALIDACION ID
        if (strlen($temp_id_pelicula) == 0) { //Comprobar longitud de una cadena
            $err_id_pelicula = "Campo obligatorio";
        } else {
            if (filter_var($temp_id_pelicula, FILTER_VALIDATE_INT) === FALSE) { //Comprobar si el numero es entero
                $err_id_pelicula = "Introduce un numero";
            } else {
                if (strlen($temp_id_pelicula) > 8 || strlen($temp_id_pelicula) < 0) {
                    $err_id_pelicula = "El nombre no puede tener más de 8 caracteres";
                } else {
                    $temp_id_pelicula = (int) $temp_id_pelicula;
                    $id_pelicula = $temp_id_pelicula;
                }
            }
        }


        # VALIDACION titulo
        if (strlen($temp_titulo) == 0) {
            $err_titulo = "Campo obligatorio";
        } else {
            if (strlen($temp_titulo) > 80) {
                $err_titulo = "No puede tener mas de 80 caracteres";
            } else {
                $titulo = $temp_titulo;
            }
        }

        # VALIDACION fecha de estreno
        if (strlen($temp_fecha_estreno) == 0) {
            $err_fecha_estreno = "Campo obligatorio";
        } else {
            list($anyo, $mes, $dia) = explode('-', $temp_fecha_estreno);
            if ($anyo < 1895) {
                $err_fecha_estreno = "Aun nok se habian inventado las peliculas";
            } else {
                $fecha_estreno = $temp_fecha_estreno;
            }
        }


        # VALIDACION edad recomendada
        if (strlen($temp_edad_recomendada) == 0) {
            $err_edad_recomendada = "Campo obligatorio";
        } else {
            $edades_recomendadas = ["0", "3", "7", "12", "16", "18"];
            if (!in_array($temp_edad_recomendada, $edades_recomendadas)) { //Comprueba si un valor existe en un array
                $err_edad_recomendada = "La edad recomendada no es valida";
            } else {
                $edad_recomendada = $temp_edad_recomendada;
            }
        }

        if (isset($id_pelicula) && isset($titulo) && isset($fecha_estreno) && isset($edad_recomendada)) {
            echo "<h1>Exito</h1>";

            $sql = "INSERT INTO peliculas 
                    VALUES ($id_pelicula, '$titulo', '$fecha_estreno', '$edad_recomendada')";

            $conexion -> query($sql);
        }
    }
    ?>
    <div class="container">
        <h1>Insertar película</h1>
        <div class="col-9">
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Pelicula id: </label>
                    <input class="form-control" type="number" name="pelicula">
                    <?php //if (isset($err_id_pelicula)) echo $err_id 
                    ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Titulo: </label>
                    <input class="form-control" type="text" name="titulo">
                </div>
                <div class="mb-3">
                    <label class="form-label">Estreno: </label>
                    <input class="form-control" type="date" name="estreno">
                </div>
                <div class="mb-3">
                    <label class="form-label">Edad recomendada: </label>
                    <select class="form-select" name="edad_recomendada">
                        <option disabled selected hidden>-- Elige una edad --</option>
                        <option value="0">Todos los publicos</option>
                        <option value="3">Mayores de 3 años</option>
                        <option value="7">Mayores de 7 años</option>
                        <option value="12">Mayores de 12 años</option>
                        <option value="16">Mayores de 16 años</option>
                        <option value="18">Mayores de 18 años</option>
                    </select>
                </div>
                <button class="btn btn-dark" type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>