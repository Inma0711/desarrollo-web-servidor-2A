<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require '../funciones/muchas_funciones.php'; ?>
</head>

<body>

    <h1>FORMULARIO IVA</h1>
    <form action="" method="post">
        <fieldset>
            <legend>IVA</legend>
            <label>Dinero</label>
            <br>
            <input type="number" name="v1">
            <br><br>
            <label for="iva">IVA</label>
            <br>

            <select id="iva" name="iva">
                <option value="SIN IVA">
                    Sin IVA
                </option>
                <option value="SUPERREDUCIDO">
                    Superreducido
                </option>
                <option value="REDUCIDO">
                    Reducido
                </option>
                <option value="GENERAL">
                    General
                </option>
            </select>

            <br><br>
            <input type="hidden" name="action" value="iva">
            <input type="submit" value="Calcular">


            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "iva") {
                    $temp_precio = depurar($_POST["v1"]);
                    if(isset($_POST["iva"])){
                        $temp_iva = depurar($_POST["iva"]);
                    }else{
                        $temp_iva = "";
                    }

                    /*
                    $precio = (float) $_POST["v1"];
                    $tipo = $_POST["iva"];

*/
            #Validacion de precio

                    if (!strlen($temp_precio) > 0) {
                        $err_precio = "El precio es obligatorio";
                    } else {
                        if (filter_var($temp_precio, FILTER_VALIDATE_FLOAT)) {
                            $err_precio = "El precio debe ser un numero";
                        } else {
                            $temp_precio = (float) $temp_precio;
                            if ($temp_precio < 0) {
                                $err_precio = "El precio debe ser mayor o igual que cero";
                            } else {
                                $precio = $temp_precio;
                            }
                        }
                    }
                    #validacion del IVA
                    if (!strlen($temp_iva) > 0) {
                        $err_iva = "El IVA es obligatorio";
                    } else {
                        $valores_validos_iva = ["GENERAL", "REDUCIDO", "SUPERREDUCIDO", "SIN IVA"];

                        if (!in_array($temp_iva, $valores_validos_iva)) {
                            $err_iva = "El IVA no es correcto";
                        } else {
                            $iva = $temp_iva;
                        }
                    }

                    if (isset($precio) && isset($iva)) {
                        echo "<h3>" . precioConIva($precio, $iva) . "</h3>";
                    }
                }
            }

            ?>
        </fieldset>
    </form>




    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["action"] == "irpf") {
            $temp_salario = $_POST["salario"];
            //echo salarioSinIRPF($salario);

            if (strlen($temp_salario) > 0) {
                // se ha introducido la base
                // comprobamos si se ha introducido un numero

                if (is_numeric($temp_salario)) {
                    //se ha introducido y ademas es un numero
                    //comprobamos que se ha introducido un numero correcto
                    if ((int)$temp_salario > 0) {
                        //EXITO
                        $salario = $temp_salario;
                    } else {
                        $err_salario = "El numero debe ser igual o mayor que 0";
                    }
                } else {
                    //se ha introducido pero no es un numero
                    $err_salario = "No se ha introducido numero";
                }
            } else {
                // no se ha introducido nada
                $err_salario = "No se ha introducido la base";
            }
        }
    }
    ?>
    <h1>FORMULARIO IRPF</h1>
    <form action="" method="post">
        <fieldset>
            <label>Salario: </label>
            <input type="number" step="1000" name="salario">
            <?php if (isset($err_salario)) echo $err_salario; ?>
            <br><br>
            <input type="hidden" name="action" value="irpf">
            <input type="submit" value="Calcular">
        </fieldset>
    </form>

</body>

</html>