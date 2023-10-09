<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <h2>IF</h2>

  <?php

    //ESTRUCTURA IF

   
        $dia = date("d");  // La d nos dira el dia en el que estamos
        if($dia <= 15) {
          echo "Estamos a principios de mes";
        }else{
          echo "Estamos a finales de mes";
        }

        echo "<br><br>";


        $hora = date("H");  // La H nos dira la hora que es
        if($hora <= "12") {
          echo "Buenos dias";
        }elseif ($hora <="20"){
          echo "Buenas tardes";
        }else {
          echo "Buenas noches";
        }

        echo "<br><br>";

    //El rand saca un numero random

    $ale = rand(1,150);
    if($ale < 10){
      echo "El numero tiene 1 digito";
    }elseif($ale < 100){
      echo "El numero tiene 2 digitos";
    }else {
      echo "El numero tiene 3 digitos";
    }

    echo "<br><br>";

    //Hacer un random y ver que numero es mayor o igual

    $x = rand(1,20);
    $y = rand(1,20);

    if($x > $y){
      echo "El " . $x . " es mayor que el " . $y;
    }elseif($x == $y){
      echo "El " . $x . " y el " . $y . " son iguales";
    }else {
      echo "El " . $x . " es menor que el " . $y;
    }

    echo "<br><br>";
       ?> 


    <h2>SWITCH</h2>


    <?php

    //ESTRUCTURA SWITCH

    //Crear un random y ver a cual es igual

    $n = rand(1,3);
    switch ($n) {
      case 1:
        echo "$n es igual a 1";
        break;

      case 2:
        echo "$n es igual a 2";
        break;

      default:
        echo "$n es igual a 3";
        break;

    }

    echo "<br><br>";

      //Escribir que dias hay clases de desarrollo web servidor

      $diaEsp = date("l"); // La l te dice el dia de la semana


      if($diaEsp == "Monday"){
          $diaEsp = "Lunes";


      }elseif ($diaEsp == "Tuesday") {
          $diaEsp = "Martes";


      }elseif ($diaEsp == "Wednesday") {
          $diaEsp = "Miercoles";
         
      }elseif ($diaEsp == "Thursday") {
          $diaEsp = "Jueves";


      }elseif ($diaEsp == "Friday") {
          $diaEsp = "Viernes";


      }elseif ($diaEsp == "Saturday") {
          $diaEsp = "Sabado";


      }else {
          $diaEsp = "Domingo";
      }

      switch ($diaEsp) {
        case "Lunes":
        case "Miercoles":
        case "Viernes":
        echo "Hoy $diaEsp hay clase DSWS";
        break;
        default:
        echo "Hoy $diaEsp no hay clase";
        break;

      }

      echo "<br><br>";
    ?>

      <h2>WHILE Y DO WHILE</h2>

    <?php

      //ESTRUCTURA WHILE

      //Enumeracion del 1 al 10

      $i = 1;
      while ($i <= 10) {
        echo $i;

        $i++;
      }

      echo "<br><br>";

      //ESTRUCTURA DO WHILE

      //Enumeracion del 1 al 10
      $i = 1;
      do{
        echo $i."<br>";
        $i++;
      }while ($i <= 10);

      echo "<br>";

    ?>

    <h2>FOR</h2>

    <?php

    //ESTRUCTURA FOR

    //Enumeracion del 1 al 10
      for ($i = 1; $i <= 10; $i++){
        echo $i;
      }

      echo "<br><br>";

      for ($i = 1; ; $i++) {
        if($i > 10){
          break;
        }
        echo $i;
      }

      echo "<br><br>";

      /*Imprime solo los numeros multiplos de 2 y 3 pero que los que sean
      iguales que no se impriman*/
      for($i = 1; $i <=50 ; $i++) {
        if(($i % 3 == 0 || $i % 2 == 0) && !($i % 6 == 0)) {
            echo $i . "<br>";
        }
    }

    echo "<br><br>";
    
    ?>

    <h2>ARRAY</h2>

    <?php
     //ESTRUCTURA ARRAY

     $series = [
      'El juego del calamar',
      'La casa de papel',
      'Alice in bordeland',
      'The Witcher'
     ];

     //echo $series[3] . "<br><br>"; Mostrar un cajon
     //$series[4] = 'Ataque a los titantes'; Para aniadir un elemento
     //$series[4] = 'Modifique el array'; //Para modificar un elemento
     //unset($series[1]); Para eliminar un elemento

     //print_r($series); Para mostrar el array sin un bucle
     //array_values, resetea todas las key y las asigna de forma ordenada
     //Cuenta el numero de elementos del array
     //Devuelve la key del elemento actual del array

     //Recorrer un array

     for($i = 0; $i < count($series); $i++) {
      echo $series[$i] . "<br>";
     }
/*
     foreach($series as $serie) {
      echo $serie . "<br>";
     }

     foreach ($series as $key => $serie){
      echo $key . " => " . $serie . "<br>";

     }

      $i = 0;
      while ($i < count($series)){
        echo $series[$i] . "<br>";
        $i++;
      }
     
*/

      /* ORDENAR ARRAY

      sort - Ordena de menor a mayor y resetea keys
      rsort - Ordena los elementos de mayor a menor y resetea keys
      asort - Ordena los elementos del array de menor a mayor sin resetear las keys
      arsort - Ordena los elementos de mayor a menor sin resetear las keys
      ksort - Ordena los elementos de menor a mayor de acuerdo a las keys
      krsort - Ordena los elementos de mayor a menor de acuerdo a las keys
      */
     echo "<br><br>";
    
      ?>

      <h2>EJERCICIO 1</h2>
      <?php

/*Crea un array que contenga los numeros pares del 1 al 50 y
muestralos.
Investiga si hay algun metodo en PHP para "barajar" los
elementos de un array.
Una vez barajado, muestra los numeros en orden descendente.*/ 


$array = [];
for($i = 1; $i <=50; $i++){
  if($i%2 == 0){
    $array[] = $i;
  }
}

foreach($array as $ar){
  echo $ar . " , ";
}

shuffle($array); // Esto es para barajar los elementos de un array
arsort($array);

echo "<br><br>";

foreach($array as $ar){
  echo $ar . " , ";
}
echo "<br><br>";
    ?>




    <h2>EJERCICIO 2</h2>

    <?php

/*Genera 10 numeros aleatorios entre el 0 y el 100.
Almacenalos en un array y muestralos ordenados de mayor a
menor y de menor a mayor.*/ 

$array2 = [];

for($i = 0; $i <10; $i++){
  $ale = rand(1,100);
$array2[$i] = $ale;
}

arsort($array2); //Se ordena por valor, ksort por clave
foreach($array2 as $ar){
  echo $ar . " , ";
}
echo "<br><br>";

asort($array2);
foreach($array2 as $ar){
  echo $ar . " , ";
}
echo "<br><br>";
?>


<h2>EJERCICIO 3</h2>


<?php

/*Dada la lista de paises y sus capitales mostrada en la
siguiente pagina, muestralos en una tabla ordenados por los
nombres de sus paises.*/ 

$paises = array( "Italy"=>"Rome", "Luxembourg" =>"Luxembourg" , "Belgium"=>
"Brussels" , "Denmark"=>"Copenhagen" , "Finland"=>"Helsinki" , "France" =>
"Paris", "Slovakia" =>"Bratislava" , "Slovenia" =>"Ljubljana" , "Germany" =>
"Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands" =>"Amsterdam" , "Portugal" =>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm" , "United Kingdom" =>"London", "Cyprus"=>"Nicosia",
"Lithuania" =>"Vilnius", "Czech Republic" =>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest" , "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" =>
"Vienna", "Poland"=>"Warsaw") ;

ksort($paises); //Ordena por los nombres de los paises

echo "<table border='1'>
  <tr>
    <th>Pais</th>
    <th>Capital</th>
  </tr>";

  foreach($paises as $pais => $capital) {
    echo "<tr>
            <td>$pais</td>
            <td>$capital</td>
          </tr>";
  }
  echo "</table";
 
?>




<br><br>
<h2>EJERCICIO 4</h2>

<?php
  //EJERCICIO 4

  /*Crea un array multidimensional que contenga la siguiente
informacion de series: titulo, plataforma y temporadas.
Crea al menos 5 series con sus respectivos titulos,
plataforma y temporadas.
Muestralos en tres tablas. Una los mostrara tal y como los
has aniadido, otra ordenados por temporada (de menor a mayor)
y otra ordenados por la plataforma a la que pertecenen, y si
la plataforma es igual, por el titulo.*/ 


$array4 = [
  ["the walking dead","hbo","11"],
  ["juego de tronos","hbo","8"],
  ["vis a vis","netflix","4"],
  ["the last kingdom","netflix","5"],
  ["vikingos","netflix","6"],
];


echo "<table border='1'>
  <tr>
    <th>Titulo</th>
    <th>Plataforma</th>
    <th>Temporada</th>
  </tr>";

  foreach($array4 as $serie) {
    list($titulo,$plataforma,$temporada) = $serie;
    echo "<tr>
            <td>$titulo</td>
            <td>$plataforma</td>
            <td>$temporada</td>
          </tr>";

  }
  echo "</table>";

  echo "<br><br>";

array_multisort(array_column($array4, 2), SORT_ASC, $array4);

echo "<table border='1'>
  <tr>
    <th>Titulo</th>
    <th>Plataforma</th>
    <th>Temporada</th>
  </tr>";

foreach($array4 as $serie) {
  list($titulo,$plataforma,$temporada) = $serie;
  echo "<tr>
          <td>$titulo</td>
          <td>$plataforma</td>
          <td>$temporada</td>
        </tr>";

}

echo "</table>";

echo "<br><br>";


array_multisort(array_column($array4, 1), SORT_ASC, array_column($array4, 0), SORT_ASC, $array4);

echo "<table border='1'>
  <tr>
    <th>Titulo</th>
    <th>Plataforma</th>
    <th>Temporada</th>
  </tr>";

foreach($array4 as $serie) {
  list($titulo,$plataforma,$temporada) = $serie;
  echo "<tr>
          <td>$titulo</td>
          <td>$plataforma</td>
          <td>$temporada</td>
        </tr>";

}
echo "</table>";
?>

<h2>EJERCICIO 5</h2>

<?php
  //Ejercicio 5

  /*Crear un array de estudiantes y, aleatoriamente, asignarles
una nota del 0 al 10.
Mostrar los estudiantes en una tabla que contenga sus
nombres, la nota que han sacado y la calificación final
(suspenso, aprobado, notable o sobresaliente).
Ordenar los estudiantes por orden alfabético*/ 
/*
  $estudiantes = [
    ["Alberto", rand(0,10)],
    ["Nacho", rand (0,10)],
    ["Raul", rand(0,10)],
    ["Adrian", rand (0,10)]
  ];

echo "<table border='1'>
<tr>
  <th>Nombre</th>
  <th>Nota</th>
  <th>Calificacion final</th>
</tr>";

  $estudiantes_2 = [
    ["Alberto"],
    ["Nacho"],
    ["Raul"],
    ["Adrian"]
  ];

  for($i = 0; $i < count($estudiantes_2); $i++){
    $estudiantes_2[$i][1] = rand(0,10);
  }
*/
  /*
  foreach($estudiantes as $estudiante){
    list($l_estudiante, $l_nota) = $estudiante;
    echo "<tr>";
    echo "<td>$l_estudiante</td>";
    echo "<td>$l_nota</td>";

    $calificacion = match(true) {
      $l_nota => 0 && $l_nota < 5 => "Suspenso",
      $l_nota => 5 && $l_nota < 7 => "Aprobado",
      $l_nota => 7 && $l_nota < 9 => "Notable",
      $l_nota => 9 && $l_nota < 10 => "Sobresaliente",
      default => "Error"
    };
  };
    echo "<td>$calificacion</td>";
    echo "</tr>";
    
*/

echo "<br><br>";
?>

<h2>EJERCICIO 1</h2>

<?php

  //EJERCICIO 1

  /*Crea una array que almacene nombres de productos y sus respectivos precios. Muestra en una tabla los productos
  con sus precios, ordenalos alfabeticamente por el nombre del producto. Muestra tambien el precio total de todos los 
  productos y cuantos productos hay en el array*/

  $tienda = array (
    "camisa" => 15,
    "pantalon" => 10,
    "zapatos" => 30,
    "accesorios" => 12,
  );

  echo "<table border='1'>
  <tr>
    <th>Producto</th>
    <th>Precio</th>
  </tr>";

$suma = 0;

  ksort($tienda);

  foreach($tienda as $producto => $precio) {
    $suma += $precio;
    
    echo "<tr>
            <td>$producto</td>
            <td>$precio</td>
          </tr>";
  }
  echo ($suma);
  echo "</table";






?>
<?php
/*Modifica el array anterior para que ademas de los productos y sus precios almacene la cantidad que se ha comprado de
cada producto. Muestra en una columna adicional el precio total de cada producto(producto x cantidad) y al final
de la tabla el precio total de todos los productos comprados y la cantidad de productos adquiridos*/ 
?>

</body>
</html>