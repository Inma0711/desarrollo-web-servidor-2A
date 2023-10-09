<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require '../funciones/funct.php'; ?>
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Numeros</legend>
        <label>Primer valor</label>
        <br>
        <input type="number" name="v1">
        <br><br>
        <label>Segundo valor</label>
        <br>
        <input type="number" name="v2">
        <br><br>
        <label>Tercer valor</label>
        <br>
        <input type="number" name="v3">
        <br><br>
        <input type="submit" name="Calcular">
    </fieldset>
    </form>
    <?php


if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Formulario enviado!</h3>";
    $valor1 = (int) $_POST["v1"];
    $valor2 = (int) $_POST["v2"];
    $valor3 = (int) $_POST["v3"];
    echo max3($valor1, $valor2, $valor3);
}

    //$_SERVER es una variable global que almacena un array


/*
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Formulario enviado!</h3>";
        $valor1 = $_POST["v1"];
        $valor2 = $_POST["v2"];
        $valor3 = $_POST["v3"];

        if($valor1>$valor2&& $valor1>$valor3){   
        echo "<h4>$valor1 es el mayor</h4>";
        }elseif($valor2>$valor1&& $valor2>$valor3){
            echo "<h4>$valor2 es el mayor</h4>";
        }elseif($valor3>$valor1&& $valor3>$valor2){
            echo "<h4>$valor3 es el mayor</h4>";
        }else{
            echo "<h4>Son iguales</h4>";
        }
    }
    */
?>
</body>
</html>