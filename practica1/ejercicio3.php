<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejercicio 3</title>
</head>
<body>

    <?php

    /*Un cuadrado perfecto es un número cuya raíz cuadrada es un número entero. Por
ejemplo, la raíz cuadrada de 9 es 3; por tanto, el 9 es un cuadrado perfecto. Sin
embargo, la raíz cuadrada de 8 es aproximadamente 2.82, por lo que 8 no es un
cuadrado perfecto.
Mediante bucles y las estructuras de control que consideres adecuadas, crea un
array que contenga los 50 primeros cuadrados perfectos comenzando desde el 1.
Muestra la información en una tabla HTML5 con CSS que contenga una columna
para indicar el cuadrado perfecto y otra para indicar su raíz cuadrada.*/ 

$array1 = array();



for($i = 1; $i <= 50; $i++){
  
    array_push($array1, pow($i,2));
}

    echo "<table border='1'>
    <tr>
      <th>Numero cuadrado perfecto</th> 
      <th>Raiz del numero</th> 
    </tr>";


    for($i = 0; $i < 50; $i++){
        echo "<tr><td>$array1[$i]</td><td>".sqrt($array1[$i]) ."</td></tr>";
    }
    ?>


    
</body>
</html>