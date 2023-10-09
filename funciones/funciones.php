<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
    /*
    function sumaDosV1 ($num1, $num2){
        //instrucciones
        return $num1 + $num2;
    }

    function sumaDosV2 (int $num1, int $num2){
        //instrucciones
        return $num1 + $num2;
    }

    function sumaDosV3 (int | float $num1, int | float $num2){
        //instrucciones
        return $num1 + $num2;
    }

    function sumaDosV3 (int | float $num1, int | float $num2) : float { //va a devolver siempre float
        //instrucciones
        return $num1 + $num2;
    }*/
/*
    $resultado = sumaDosV3(1.5,3);
    //Dos formas de hacerlo
    echo "<h3>Resultado 1: $resultado</h3>"; 
    echo "<h3>Resultado 2: " . sumaDosV1(3,5) . "</h3>";
*/

function calificacion(int|float $nota) :string { //:string es lo que me va a devolver

    $calificacion = match(true) {
        $nota >= 0 && $nota < 5 => "Suspenso",
        $nota >= 5 && $nota < 7 => "Aprobado",
        $nota >= 7 && $nota < 9 => "Notable",
        $nota >= 9 && $nota < 10 => "Sobresaliente",
        default => "Error"
      };
      return $calificacion;
    }

    echo "<h3>La nota 5.5 es un: " . calificacion(5.5) . "</h3>";
    echo "<br><br>";


function primos (int $limite) : array{
    $primos = [];

    for($i = 2; $i <= $limite; $i++){
        $primo = true;
        for($j = 2; $j <= $i-1 && $primo; $j++){
            if($i % $j == 0) {
                $primo = false;
            }
        }
        if($primo) array_push($primos, $i);
    }

    return $primos;
}

    $primos = primos(75);
    foreach($primos as $primo) {
        echo "$primo ";
    }

    echo "<br><br>";

function primoNum (int $numerito) :bool{
    if ($numerito < 2)
    return false;

        $primo = true;
        for($j = 2; $j < $numerito; $j++){
            if($numerito % $j == 0) {
                return false;
            }
        }
        return true;
}

    //echo primoNum(97) ? "si" : "no";
    $esPrimo = primoNum(12);

    if($esPrimo) {
        echo "<h3>El numero es primo</h3>";
    } else {
        echo "<h3>El numero no es primo</h3>";
    }

    echo "<br><br>";


    //Convertidor de fahrenheit a celsius
function convertidor1(int $num) {
     $formula = ($num - 32) * 5/9;
    return $formula;
    
}
    $formu1 = convertidor1(25);
    echo "<h3>La conversion es: " . $formu1 . "</h3>";

  
    //Convertidor de celsius a fahrenheit 
function convertidor2(int $num){
    $formula =($num * 9/5) + 32;
    return $formula;
}
    $formu2 = convertidor2(25);
    echo "<h3>La conversion es: " . $formu2 . "</h3>";
    

    //Convertidor de fahrenheit a Kelvin
function convertidor3(int $num){
    $formula =($num - 32) * 5/9 + 273.15;
    return $formula;
}
    $formu3 = convertidor3(25);
    echo "<h3>La conversion es: " . $formu3 . "</h3>";


     //Convertidor de celsius a Kelvin
     function convertidor4(int $num){
        $formula = $num + 273.15;
        return $formula;
    }
        $formu4 = convertidor4(25);
        echo "<h3>La conversion es: " . $formu4 . "</h3>";


           //Convertidor de Kelvin a celsius
     function convertidor5(int $num){
        $formula = $num - 273.15;
        return $formula;
    }
        $formu5 = convertidor5(25);
        echo "<h3>La conversion es: " . $formu5 . "</h3>";


           //Convertidor de Kelvin a fahrenheit
     function convertidor6(int $num){
        $formula = ($num - 273.15) * 9/5 + 32;
        return $formula;
    }
        $formu6 = convertidor6(25);
        echo "<h3>La conversion es: " . $formu6 . "</h3>";


        echo "<br><br>";

    function convertidorT(int|float $temp, string $t1, string $t2) :float {
        
        $t1 = strtoupper($t1);
        $t2 = strtoupper($t2);

        $Final = match(true) {
            $t1 == "C" && $t2 == "F" => convertidor2($temp),
            $t1 == "F" && $t2 == "C" => convertidor1($temp),
            $t1 == "C" && $t2 == "K" => convertidor4($temp),
            $t1 == "F" && $t2 == "K" => convertidor3($temp),
            $t1 == "K" && $t2 == "C" => convertidor5($temp),
            $t1 == "K" && $t2 == "F" => convertidor6($temp),
            default => -1000
        };
        return $Final;
    }

        $conver = convertidorT(25, "C", "F");
        echo "<h3>La conversion es: " . $conver . "</h3>";

        $conver = convertidorT(27, "F","C");
        echo "<h3>La conversion es: " . $conver . "</h3>";

        $conver = convertidorT(28, "C","K");
        echo "<h3>La conversion es: " . $conver . "</h3>";

        $conver = convertidorT(30, "F","K");
        echo "<h3>La conversion es: " . $conver . "</h3>";

        $conver = convertidorT(4, "K","C");
        echo "<h3>La conversion es: " . $conver . "</h3>";

        $conver = convertidorT(6, "K","F");
        echo "<h3>La conversion es: " . $conver . "</h3>";
       
        echo "<br><br>";


    function potencia(int $num1, int $num2) : int{
        if($num1>=0){
           $res= $num1 ** $num2; 
        }else {
            echo "<h3>Vuelve a poner otro valor</h3>";
        };

        return $res;
    }

    $resultado = potencia(3,4);
    echo "<h3>La potencia es : " . $resultado . "</h3>";

        
?>
</body>
</html>