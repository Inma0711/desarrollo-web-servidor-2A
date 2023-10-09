<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require '../funciones/funct.php'; ?>
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
                    $precio = (float) $_POST["v1"];
                    $tipo = $_POST["iva"];
                    echo precioConIva($precio, $tipo);
                }
            }
            ?>
        </fieldset>
    </form>



    <h1>FORMULARIO IRPF</h1>
    <form action="" method="post">
        <fieldset>
            <label>Salario: </label>
            <input type="number" step="1000" name="salario"><br><br>
            <input type="hidden" name="action" value="irpf">
            <input type="submit" value="Calcular">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "irpf") {
                    $salario = (float) $_POST["salario"];
                    echo salarioSinIRPF($salario);
                }
            }
            ?>
        </fieldset>
    </form>

</body>

</html>