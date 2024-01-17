<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Crear Comic</title>
    <?php require 'database_conection.php' ?>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo_comic = $_POST["titulo_comic"];
        $paginas = $_POST["paginas"];
        $genero = $_POST["genero"];
       

        $sql = $_conexion -> prepare("INSERT INTO  comics (titulo_comic, paginas, genero)VALUES (?,?,?)");
        $sql -> bind_param("sss", $titulo_comic, $paginas, $genero);
        $sql -> execute();

        $_conexion -> close();
    }
    ?>

    <div class="container">
        <h1>Nuevo comic</h1>

        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input class="form-control" type="text" name="titulo_comic">
            </div>
           
            <div class="mb-3">
                <label class="form-label">Pagina</label>
                <input class="form-control" type="text" name="paginas">
            </div>
        
            <div class="mb-3">
                <label class="form-label">Genero</label>
            <select class="form-select" name="genero">
                        <option selected value="accion">Accion</option>
                        <option value="aventuras">Aventuras</option>
                        <option value="romance">Romance</option>
                        <option value="comedia">Comedia</option>
                    </select>
            </div>

            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Crear">
            
            <a class="btn btn-dark" href="index.php">Volver</a>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>