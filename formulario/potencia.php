<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Potencia</title>
    <?php require '../funciones/muchas_funciones.php'; ?>
</head>

<body>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //$base = (int) $_POST["base"];
        //$exponente = (int) $_POST["exponente"];
        //echo potencia($base, $exponente);
        $temp_base = depurar($_POST['base']);
        $temp_exp = depurar($_POST['exponente']);

        if (strlen($temp_base) > 0) {
            // se ha introducido la base
            // comprobamos si se ha introducido un numero
            if (is_numeric($temp_base)) {
                //se ha introducido y ademas es un numero
                //comprobamos que se ha introducido un numero correcto
                $temp_base = (int)$temp_base;
                if ($temp_base >= 0) {
                    //EXITO
                    $base = $temp_base;
                } else {
                    $err_base = "El numero debe ser igual o mayor que 0";
                }
            } else {
                //se ha introducido pero no es un numero
                $err_base = "No se ha introducido numero";
            }
        } else {
            // no se ha introducido nada
            $err_base = "No se ha introducido la base";
        }

        if (strlen($temp_exp) > 0) {
            // se ha introducido el exp
            // comprobamos si se ha introducido un numero
            if (is_numeric($temp_exp)) {
                //se ha introducido y ademas es un numero
                //comprobamos que se ha introducido un numero correcto
                $temp_exp = (int)$temp_exp;
                if ($temp_exp >= 0) {
                    //EXITO
                    $exponente = $temp_exp;
                } else {
                    $err_exp = "El numero debe ser igual o mayor que 0";
                }
            } else {
                //se ha introducido pero no es un numero
                $err_exp = "No se ha introducido numero";
            }
        } else {
            // no se ha introducido nada
            $err_exp = "No se ha introducido la base";
        }


        if (isset($base) && isset($exponente)) {
            echo $base . $exponente;
        } else if (isset($err_base)) {
            echo $err_base;
        }
    }

    ?>

    <form action="" method="post">
        <label for="base">Base</label>
        <input type="text" id="base" name="base">
        <p><?php if (isset($err_base)) echo $err_base ?></p>
        <br><br>
        <label for="exponente">Exponente</label>
        <input type="text" id="exponente" name="exponente">
        <p><?php if (isset($err_exp)) echo $err_exp ?></p>
        <br>
        <br>
        <input type="submit" name="Calcular">
    </form>

</body>

</html>