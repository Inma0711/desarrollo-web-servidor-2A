<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>View videogame</title>
    <?php require 'database_conection.php' ?>
</head>
<body>
    <?php
    if(!isset($_GET["titulo"])) header('location: index.php'); // isset es para ver si la variable existe o no exis

    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $titulo = $_GET["titulo"];

        $sql = $conexion -> prepare("SELECT * FROM videojuegos
            WHERE titulo = ?");
        $sql -> bind_param("s", $titulo);
        $sql -> execute();
        $resultado = $sql -> get_result();
       

        $fila = $resultado -> fetch_assoc();
        $conexion -> close();

        $distribuidora = $fila["distribuidora"];
        $precio = $fila["precio"];
    }
    ?>
       <div class="container my-4">
        <h1>View videogame</h1>
        <div class="row my-4">
                <h3 class="col-4"><?php echo $titulo ?></h3>
                <h3 class="col-4"><?php echo $distribuidora ?></h3>
                <h3 class="col-4"><?php echo $precio ?></h3>
            </div>
            <div class="row my-4"> 
                <div>
                <form action="edit_videogame.php" method="get">
                    <input type="hidden" name="titulo" value="<?php echo $titulo ?>">
                    <input class="btn btn-primary col-2" type="submit" value="Editar">
                </form> 
                </div> 
          
            <div>
                <form action="delete_videogame.php" method='post'>
                    <input type="hidden" name="titulo" value="<?php echo $titulo ?>">
                    <input class="btn btn-danger col-2" type="submit" value="Borrar">
                </form>
            </div>
        </div>
        </div>
  
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>