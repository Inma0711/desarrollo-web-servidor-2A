<?php
// Crear un array bidimensional de 4x4
$filas = 3;
$columnas = 4;
$arrayBidimensional = array();

// Llenar el array bidimensional con valores aleatorios entre 1 y 100
for ($i = 0; $i < $filas; $i++) {
    $fila = array();
    for ($j = 0; $j < $columnas; $j++) {
        $fila[$j] = rand(1, 100);
    }
    $arrayBidimensional[] = $fila;
}

// Mostrar el array bidimensional en una tabla HTML
echo "<table border='1'>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        echo "<td>{$arrayBidimensional[$i][$j]}</td>";
    }
    echo "</tr>";
}
echo "</table>";

/*<?php
// Ejemplo de un array
$frutas = array("manzana", "plátano", "uva", "naranja");

// Usando print_r() para mostrar el contenido del array de forma legible
echo "Usando print_r():<br>";
print_r($frutas);
echo "<br><br>";

// Usando var_dump() para mostrar información detallada del array
echo "Usando var_dump():<br>";
var_dump($frutas);
?>
*/ 

?>

