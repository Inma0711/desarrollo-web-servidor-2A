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

if($_SERVER["REQUEST_METHOD"] == "POST") { // Esto indica si el formulario se a enviado
    echo "<h3>Formulario enviado!</h3>";
    $producto =  $_POST["v1"]; // con post se recuperan los datos del formulario y los guarda en una variable
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

/*form = para crear el fomrulario
action = url donde se mandara el formulario, en este caso esta vacio asi que se enviara a la misma pagina
method = para enviar datos en este caso post

fieldset = para organizar el formulario
label = elemento, proporciona etiqueta a un campo
<input type="string" name="v1">: Aquí se crea un campo de entrada de tipo "string" (que es el valor predeterminado para los campos de entrada de texto) y se le asigna el nombre "v1". Esto permitirá que el servidor identifique este campo por su nombre cuando se envíe el formulario.
<input type="number" step="0.1" name="v2">: Este es un campo de entrada de tipo "number" que se utiliza para introducir números. El atributo step define el incremento mínimo permitido para los valores (0.1 en este caso) y el atributo name asigna el nombre "v2" a este campo.

<label>cantidad</label>: Otra etiqueta descriptiva para el tercer campo de entrada.

<input type="number" name="v3">: Similar al séptimo punto, esto crea un campo de entrada de tipo "number" para introducir números y se le asigna el nombre "v3".

<input type="submit" name="Añade">: Este es un botón de envío (submit button) que permite enviar el formulario al servidor. El atributo type se establece en "submit", lo que indica que este botón envía el formulario. El atributo name se establece en "Añade", que será el nombre utilizado para identificar este botón en los datos enviados al servidor cuando se presione.
  */
  ?>
</body>
</html>

