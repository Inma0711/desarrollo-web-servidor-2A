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
        $titulo = $_POST["titulo"];
        $columna = $_POST["columna"];
        $orden = $_POST["orden"];

        $filtro = explode(";", $_POST["filtro"]);
        // El explode crea un array separando un string segun el delimitador, es como un split

       //var_dump($filtro);   Esto es como el console log
        /*
        $precioMin = (double)$_POST['preciomin'];
        if (strlen($_POST['preciomax']) > 0)
            $precioMax = (double)$_POST['preciomax'];
        else
            $precioMax = PHP_INT_MAX;
       */
        // $rango1 = (double)$_POST['rango1'];
       // $rango2 = (double)$_POST['rango2'];


        $sqlito = "SELECT * FROM videojuegos WHERE titulo LIKE CONCAT('%',?,'%')
        AND precio >= ? AND precio < ?";

        //"AND ((precio <= p1 AND precio < p2) OR (precio <= p3 AND precio < p4))";

        $sqlito .= " ORDER BY $columna $orden";
/*LIKE es como, se usa para hacer comparaciones de strings segun expresiones regulares*/ 
        $sql = $conexion -> prepare(
            $sqlito
            );
      /*  $sql -> bind_param("sddsss", $titulo, $precioMin, $precioMax); Siempre que haya interrogacion va a haber un bind, si es string es la s*/
      //  $sql -> bind_param("sdddd", $titulo, $precioMin, $precioMax, $rango1, $rango2);
      $sql -> bind_param("sdd", $titulo, $filtro[0], $filtro[1]);
      $sql -> execute(); /*Para ejecutar*/ 
        $resultado = $sql -> get_result();  /*Para sacar resultado*/ 
        $conexion -> close(); /* Cerrar conexion*/ 
    }

    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $sql = $conexion -> prepare("SELECT * FROM videojuegos");
        $sql -> execute();
        $resultado = $sql -> get_result();
        $conexion -> close();
    }
    
    ?>
    <div class="container">
        <h1>Videojuegos</h1>
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col-4">
                    <input class="form-control" type="text" name="titulo">
                </div>
                <div class="col-2">
                    <input class="btn btn-primary" type="submit" value="Buscar">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label class="form-label">Filtrar</label>
                </div>
                <div class="col-2">
                    <select class="form-select" name="columna">
                        <option selected value="titulo">Título</option>
                        <option value="distribuidora">Distribuidora</option>
                        <option value="precio">Precio</option>
                    </select>
                </div>
                <div class="col-2">
                    <select class="form-select" name="orden">
                        <option selected value="asc">Ascendente</option>
                        <option value="desc">Descendente</option>
                    </select>
                </div>
                
            </div>
            <div class="row mb-3">
                <div class="col-2"><label><input type="text" value="" name="preciomin">Precio Min</label></div>
                <div class="col-2"><label><input type="text" value="" name="preciomax">Precio Max</label></div>
            </div>
            <div class="row">
                <div>
                    <input id="r1" type="radio" value="0;20" name="filtro">
                    <label for="r1">0 - 20</label>
                </div>
                <div>
                    <input type="radio" value="20;50" name="filtro">
                    <label>20 - 50</label>
                </div>
                <div>
                    <input type="radio" value="50;100" name="filtro">
                    <label>50 - 100</label>
                </div>
            </div>
              
            <div class="row mb-3">
                <!--
            <div class="col-2">   
                    <label for='min'>0 - 100</label>
                    <input id='min' type="range" value="0" onInput="this.nextElementSibling.value = this.value" min='0' max='100' name="rango1">
                    <output></output>
                </div>
              
               <div class="col-2">   
                    <label for='max'>100 - 500</label>
                    <input id='max' type="range" value="999999" onInput="this.nextElementSibling.value = this.value" min='100' max='500' name="rango2">
                    <output></output>
                </div>
                -->
            </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Distribuidora</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($fila = $resultado -> fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $fila["titulo"] ?></td>
                        <td><?php echo $fila["distribuidora"] ?></td>
                        <td><?php echo $fila["precio"] ?></td>
                        <td>
                            <form action="view_videogame.php" method="get">
                                <input type="hidden" name="titulo" value="<?php echo $fila["titulo"]?>">
                                <input class="btn btn-secondary" type="submit" value="Ver">
                            </form>
                </td>
                <td>
                            <form action="delete_videogame.php" method='post'>
                                <input type="hidden" name="titulo" value="<?php echo $fila["titulo"] ?>">
                                 <input class="btn btn-danger" type="submit" value="Borrar">
                            </form>
                            
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>