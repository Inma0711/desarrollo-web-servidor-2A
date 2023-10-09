<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
  <fieldset>
        <label>producto</label>
        <br>
        <input type="string" name="v1">
        <br><br>
        <label>precio</label>
        <br>
        <input type="number" step="0.1" name="v2">
        <br><br>
        <label>cantidad</label>
        <br>
        <input type="number" name="v3">
        <br><br>
        <input type="submit" name="Añade">
  </fieldset>
    </form>


    <?php
 echo "<br><br>";

 $tabla = [
    ['anillo', 30.00, 2],
    ['perlas', 60.00, 6],
    ['collar', 25.00, 10],
];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Formulario enviado!</h3>";
    $producto =  $_POST["v1"];
    $precio = (float) $_POST["v2"];
    $cantidad = (int) $_POST["v3"];
    array_push($tabla, [$producto, $precio, $cantidad]);
}

  
echo "<table border='1'>
  <tr>
    <th>Producto</th>
    <th>Precio</th>
    <th>Cantidad</th>
  </tr>";

foreach($tabla as $table) {
  list($pro,$pre,$cant) = $table;
  echo "<tr>
          <td>$pro</td>
          <td>$pre</td>
          <td>$cant</td>
        </tr>";
}


  ?>
</body>
</html>