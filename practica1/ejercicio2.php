<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    /*Contamos con un array bidimensional donde tenemos almacenados los nombres de
las capitales de provincia de Andalucía y las temperaturas máximas y mínimas para
el día 29/09/2023. Puedes encontrar el código del array al final de este ejercicio

Parte 1: Añade, mediante un bucle FOR, una cuarta columna donde se indique la
media entre la temperatura máxima y la mínima.

Parte 2: Ordena el array por la temperatura mínima prevista. En caso de que haya
varias ciudades con la misma temperatura mínima prevista, ordena alfabéticamente
por el nombre de la ciudad.

Parte 3: Muestra en una tabla HTML5 con CSS todo el contenido del array.

Parte 4: Muestra debajo de la tabla, en las etiquetas HTML5 que consideres más
apropiadas, la temperatura mínima media de todas las ciudades y la temperatura
máxima media de todas las ciudades (es decir, el resultado de sumar las
temperaturas de todas las ciudades y dividirlas por el número de ciudades).*/


$temperaturas = [
    ["Málaga", 20, 27],
    ["Sevilla", 17, 36],
    ["Cádiz", 19, 31],
    ["Jaén", 19, 33],
    ["Granada", 12, 35],
    ["Almería", 20, 27],
    ["Huelva", 16, 33]
    ];

   

    //Parte 1

    for ($i = 0; $i < count($temperaturas); $i++) {
        $temperaturas[$i][3] = ($temperaturas[$i][1]+$temperaturas[$i][2])/2;
    }
  


    //Parte 2

array_multisort(array_column($temperaturas, 1), SORT_ASC, array_column($temperaturas, 0), SORT_ASC, $temperaturas);


    //Parte 3
   
 echo "<table border='1'>
  <tr>
    <th>Pais</th>
    <th>Temp Min</th>
    <th>Temp Max</th>
    <th>Media</th>
  </tr>";

foreach($temperaturas as $temp) {
  list($pais,$temMin,$temMax,$media) = $temp;
  echo "<tr>
          <td>$pais</td>
          <td>$temMin</td>
          <td>$temMax</td>
          <td>$media</td>
        </tr>";

}



for ($i = 0; $i < count($temperaturas); $i++) {
    $mediaMin = ($temperaturas[$i][1]+$temperaturas[$i][1])/count($temperaturas);
}

for ($i = 0; $i < count($temperaturas); $i++) {
    $mediaMax = ($temperaturas[$i][2]+$temperaturas[$i][2])/count($temperaturas);
}

echo "</table>
    <h3>Temperatura minima media: $mediaMin </h3>
    <h3>Temperatura maxima media: $mediaMax </h3>";

    
    ?>


</body>
</html>