<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create videogame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'database_conection.php' ?>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $titulo_comic = $_GET["titulo_comic"];

        $sql = $_conexion -> prepare("SELECT * FROM comics
            WHERE titulo_comic = ?");
        $sql -> bind_param("s", $titulo_comic);
        $sql -> execute();
        $resultado = $sql -> get_result();

        $fila = $resultado -> fetch_assoc();
        $_conexion -> close();

        $paginas = $fila["paginas"];
        $genero = $fila["genero"];
     
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo_comic = $_POST["titulo_comic"];
        $paginas = $_POST["paginas"];
        $genero = $_POST["genero"];
        $titulo_original = $_POST["titulo_original"];

        $sql = $_conexion -> prepare("UPDATE comics
            SET titulo_comic = ?, paginas = ?, genero = ?
            WHERE titulo_comic = ?");
        $sql -> bind_param("ssss", $titulo_comic, $paginas, $genero, $titulo_original);
        $sql -> execute();
        header('location: index.php');
    }
    ?>

    <div class="container">
        <h1>Nuevo comic</h1>

        <form action="" method="post">
            <input type="hidden" name="titulo_original" value="<?php echo $titulo_comic ?>">
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input class="form-control" type="text" name="titulo_comic" value="<?php echo $titulo_comic ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Paginas</label>
                <input class="form-control" type="text" name="paginas" value="<?php echo $paginas ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Genero</label>
                <input class="form-control" type="text" name="genero" value="<?php echo $genero ?>">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Editar">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>