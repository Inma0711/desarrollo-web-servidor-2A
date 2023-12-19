   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <?php require 'funciones.php'; ?>
       <title>Document</title>
   </head>

   <body>
       <fieldset>
           <h2>FORMULARIO DINERO</h2>
           <legend>EJERCICIO 1</legend>
           <br>
           <form action="" method="post">
               <label for="dinero">Dinero</label>
               <br>
               <input type="number" name="dinero">
               <br><br>
               <label for="divisa">Elige</label>
               <br>
               <input type="radio"
                name="divisa" value="E">€
                <br>
                <input type="radio"
                name="divisa" value="D">$
                <br>
                <input type="radio"
                name="divisa" value="Y">¥
                <br>
               <label for="divisa2">Elige</label>
               <br>
               <input type="radio"
                name="divisa2" value="E">€
                <br>
                <input type="radio"
                name="divisa2" value="D">$
                <br>
                <input type="radio"
                name="divisa2" value="Y">¥
                <br>
               
               
               <input type="hidden" name="action" value="dinero">
               <input type="submit" name="Enviar">
               <br><br>

               <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($_POST["action"] == "dinero") {
                        $dinero = (float) $_POST["dinero"];
                        $m1 = $_POST["divisa"];
                        $m2 = $_POST["divisa2"];
                        echo "El dinero convertido es: " . cambiarDivisa($dinero, $m1, $m2);
                    }
                }

                ?>
           </form>
       </fieldset>
       <br><br>
       <fieldset>
           <h2>FORMULARIO MATEMATICAS</h2>
           <legend>EJERCICIO 2</legend>
           <br>
           <form action="" method="post">
               <label for="valor">Numero</label>
               <br>
               <input type="number" name="valor">

               <select id="formu" name="formu">
                   <option value="SUMATORIO">
                       Sumatorio
                   </option>
                   <option value="FACTORIAL">
                       Factorial
                   </option>
               </select>
               <input type="hidden" name="action" value="numero">
               <input type="submit" name="Enviar">
               <br><br>

               <?php

$animales = [
    ["Lobo ibérico", "Mamífero", 2500],
    ["Lince ibérico", "Mamífero", 1668],
    ["Quebrantahuesos", "Ave", 2000],
    ["Oso pardo", "Mamífero", 500]
];

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($_POST["action"] == "numero") {
                        $num = (float) $_POST["valor"];
                        $formu = $_POST["formu"];
                        if ($num >= 0) {
                            if ($formu == "SUMATORIO") {
                                echo "El sumatorio es: " . sumatorio($num);
                            } else {
                                echo "El factorial es: " . factorial($num);
                            }
                        } else {
                            echo "ERROR: Número no válido";
                        }
                    }
                }

                ?>
           </form>
       </fieldset>
       <br><br>
       <fieldset>
           <h2>FORMULARIO ANIMALES</h2>
           <legend>EJERCICIO 3</legend>
           <br>
        <form action="" method="post">
            <h3>Buscar especie</h3>
            <label>Especie:</label>
            <br>
            <input type="text" name="especie">

            <input type="hidden" name="action" value="animales">
            <input type="submit" name="Enviar" value="Comprobar">
            <br>
            <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["action"] == "animales") {
        $especie = $_POST["especie"];
        foreach ($animales as $animalitos) {
            list($animal,$tipo, $cantidad) = $animalitos;
            if($animal == $especie){
                echo " El ". $animal . " está " . comprobarEstado($cantidad);
            };

        }
        
    }
}
?>
<br><br>
<?php
     

        echo "<table border='1'>
        <tr>
          <th>Animal</th>
          <th>Tipo</th>
          <th>Cantidad</th>
          <th>Estado</th>
        </tr>";

        foreach ($animales as $animalitos) {
            list($animal, $tipo, $cantidad) = $animalitos;
            echo "<tr>
                <td>$animal</td>
                <td>$tipo</td>
                <td>$cantidad</td>
                <td>" . comprobarEstado($cantidad) . "</td>
              </tr>";
        }
        echo "</table>";
        ?>




        </form>
       </fieldset>



   </body>

   </html>