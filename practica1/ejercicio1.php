<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejercicio 1</title>
</head>

<body>


    <?php
    /*Genera mediante bucles FOR anidados las tablas de multiplicar del 1 al 10 y
estructura la información en tablas HTML5 con CSS. El resultado será similar al
siguiente (los estilos CSS que apliques quedan a tu libertad).*/

    $mult = 0;
    for ($i = 1; $i <= 10; $i++) {
        echo "<table border='1'>
    <tr>
      <th>Tabla del $i</th> 
    </tr>";

        for ($j = 0; $j <= 10; $j++) {
            $mult = $i * $j;
            echo "<tr>   
        <td>
        $i x $j = $mult <br>
        </td>
        </tr>";
        }

        echo "</table><br>";
    }

    ?>
</body>

</html>