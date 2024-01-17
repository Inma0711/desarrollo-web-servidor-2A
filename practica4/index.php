<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'database_conection.php' ?>
</head>
<body>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo_comic = $_POST["titulo_comic"];
        $genero = $_POST["genero"];
        $paginas = $_POST["paginas"];
        $columna = $_POST["columna"];

       $pagmin = (double)$_POST['pagmin'];

        if (strlen($_POST['pagmax']) > 0)
            $pagmax = (double)$_POST['pagmax'];
        else
            $pagmax= PHP_INT_MAX;


        $sql = $_conexion -> prepare("SELECT * FROM comics 
            WHERE paginas >= ? AND paginas < ? ORDER BY $columna ");
        $sql -> bind_param("ss", $pagmin, $pagmax);
        $sql -> execute();
        $resultado = $sql -> get_result();
        $_conexion -> close(); 
    }

  
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $sql = $_conexion -> prepare("SELECT * FROM comics");
        $sql -> execute();
        $resultado = $sql -> get_result();
        $_conexion -> close();
    }
    
    ?>
    <div class="container">
        <h1>Comics</h1>
        <form action="" method="post">
            <div class="row mb-3">
               

                <div class="row mb-3">
                <div class="col-2"><label><input type="text" value="" name="pagmin">Pag Min</label></div>
                <div class="col-2"><label><input type="text" value="" name="pagmax">Pag Max</label></div>

            </div>

            <div class="mb-3">
                <label class="form-label">Genero</label>
                <select class="form-select" name="columna">
                        <option selected value="accion">Accion</option>
                        <option value="aventuras">Aventuras</option>
                        <option value="romance">Romance</option>
                        <option value="comedia">Comedia</option>
                    </select>
            </div>

                <div class="col-2">
                    <input class="btn btn-primary" type="submit" value="Buscar">
                </div>
                <div class="col-2">
                <a class="btn btn-dark" href="create_comic.php">Crear</a>
                </div>
            </div>
            
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Pagina</th>
                    <th>Genero</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                while($fila = $resultado -> fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $fila["titulo_comic"] ?></td>
                        <td><?php echo $fila["paginas"] ?></td>
                        <td><?php echo $fila["genero"] ?></td>
                      
                        <td>
                            <form action="view_comic.php" method="get">
                                <input type="hidden" name="titulo_comic" value="<?php echo $fila["titulo_comic"] ?>">
                                <input class="btn btn-secondary" type="submit" value="Ver">
                            </form>
                        </td>
                        <td>
                            <form action="delete_comics.php" method='post'>
                                <input type="hidden" name="titulo_comic" value="<?php echo $fila["titulo_comic"] ?>">
                                 <input class="btn btn-danger" type="submit" value="Borrar">
                            </form>
                            
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>