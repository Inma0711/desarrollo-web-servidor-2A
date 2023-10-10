<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require '../funciones/funciones.php'; ?>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <legend>Tabla</legend>
            <label>Nombre</label>
            <br>
            <input type="string" name="nombre" placeholder="Escribe tu nombre" onfocus="">
            <br><br>
            <label for="asignatura">Asignatura</label>
            <br>

            <select id="asignatura" name="asignatura">
                <option value="DISEÑO WEB">Diseño Web</option>
                <option value="DWES">Desarrollo Servicio</option>
                <option value="DWEC">Desarrollo Cliente</option>
                <option value="EMPRESA">Empresa</option>
            </select>
            <br><br>
            <label for="nota">Nota</label>
            <br>
            <input type="number" name="nota" placeholder="Escribe tu nota" onfocus="">
            <br>
            <input type="submit" value="Calcular">
            <br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombre = $_POST["nombre"];
                $asignatura = $_POST["asignatura"];
                $nota = (int)$_POST["nota"];
                echo calificacion($nota);
            }

            ?>

        </fieldset>
    </form>


</body>

</html>