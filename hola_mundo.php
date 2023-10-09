<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php
    echo "<h1>Hola mundo</h1>";
    ?>


    <?php
    /*
    echo "<h3>Otro hola mundo</h3>";
   

    $entero = 1; # int
    $decimal = 1.5; # float
    $exponente = 3e5; # float
    
    
    
    var_dump($exponente);

    echo "<br><br>";

    $string1 = "Hola";
    $string2 = 'Hola';

    echo "Texto: $string1"; #Esto solo se puede hacer con comillas dobles
    echo 'Texto: $tring1';
    echo "<br>";
    echo $string1 . " " . $string2;
    echo "<br>";
    echo "<h1>$string1</h1>";
    echo "<h1>" . $string1 . "</h1>"; #los puntos sirven para concatenar, lo que en java era un +



    $array1 = [1,"2",3];      #para crear los arrays y se puede mezclar string con int
    $array2 = ["a","b","c"];

    var_dump($array1);
    echo "<br><br>";
    var_dump($array2);


  
    $b = true;
    var_dump($b);


    #las variables no pueden empezar por numero, siempre por mayuscula, minuscula o _

    define("EDAD", 25); #esta es una constante, para mostrarla aqui no se pone el $
    echo EDAD;
  */
    ?>








    <?php
    /*
        $dia = date("d");
        if($dia <= 15){
            echo "Estamos a principios de mes";
        }else{
            echo "Estamos a finales de mes";
        }


        ------------------------------------------------
        echo "<br><br>";

        $hora = date("H");
        if($hora <= "12"){
            echo "Buongiorno";
        }elseif ($hora <= "20"){
            echo "Buonasera";
        }else{
            echo "Buonanotte";
        }



        ------------------------------------------------
        echo "<br><br>";

        $ale = rand(1,150);
        if($ale < 10){
            echo "El numero tiene 1 digito";
        }elseif ($ale < 100){
            echo "El numero tiene 2 digitos";
        }else {
            echo "El numero tiene 3 digitos";
        }



    ------------------------------------------------
        echo "<br><br>";

        $x = rand (1,10);
        $y = rand (1,10);

        if ($x > $y)
            echo $x . " es mayor que " . $y;
        elseif ($x == $y)
            echo $x . " igual " . $y;
        else
            echo $x . " es menor que " . $y;
   
        echo "<br><br>";

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






    ------------------------------------------------
        echo "<br><br>";

        $dia = date("l");       #La l es para ver el dia
        
        switch ($dia) {
            case "Monday":
            case "Wednesday":
            case "Friday":
            echo "Hoy $dia hay clase DSWS";
            break;
            default:
            echo "Hoy $dia no hay clase";
            break;
        }
*/









    /*
        $diaEsp = date("l");

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
        */

    ?>







    <?php
/*
    //------------------------------------------------
    #Genera un numero aleatorio del 1 al 10 y muestra si el numero generado es par o impar

    $ale2 = rand(1, 10);

    if ($ale2 % 2 == 0) {
        echo " El numero $ale2 es par";
    } else {
        echo " El numero $ale2 es impar";
    }

    echo "<br><br>";

    #Genera un numero aleatorio del -10 al 10 y muestra si es positivo, negativo o cero

    $ale3 = rand(-10, 10);

    if ($ale3 < 0) {
        echo "El numero $ale3 es negativo";
    } elseif ($ale3 > 0) {
        echo "El numero $ale3 es positivo";
    } else {
        echo "Es $ale3";
    }

    */
    /*
--------------------------------------------------
#Muestra, en español el dia y el mes actual


$diaa = date("j");
$mess = date("F");

echo "<br><br>";

switch($mess) {
    case "January": $mess = "Enero"; break;
    case "February": $mess = "Febrero"; break;
    case "March": $mess = "Marzo"; break;
    case "April": $mess = "Abril"; break;
    case "May": $mess = "Mayo"; break;
    case "June": $mess = "Junio"; break;
    case "August": $mess = "Agosto"; break;
    case "September": $mess = "Septiembre"; break;
    case "October": $mess = "Octubre"; break;
    case "November": $mess = "Noviembre"; break;
    case "December": $mess = "Diciembre"; break;
}
echo "Hoy es $diaa de $mess";
*/

    //------------------------------------------------
    #Muestra la zona horaria en la que nos encontramos
    /*
echo "<br><br>";

$Zh = date("e");
echo " $Zh ";

//-----------------------------------------------
#Para traducir mas rapido

echo "<br><br>";

$d = date("l");
$de = match($d){        #Solo en le match se asigna =>
    "Monday" => "Lunes",
    "Wednesday" => "Miercoles",
};

echo $de;

//----------------------------------------------
#Muestra, en español el dia y el mes actual
echo "<br><br>";

$diaa = date("j");
$mess = date("F");
$messEsp = match($mess){
    "January" => "Enero",
    "February" => "Febrero",
    "March" => "Marzo",
    "April" => "Abril",
    "May" => "Mayo",
    "June" => "Junio",
    "July" => "Julio",
    "August" => "Agosto",
    "September" => "Septiembre",
    "October" => "Octubre",
    "November" => "Noviembre",
    "December" => "December",


};

echo "Hoy es $diaa de $messEsp";

?>





<?php
echo "<br><br><br><br>";

    $i = 1;
    while ($i <= 10) {
        echo $i;

        $i++;
    }


echo "<br><br>";

    $ii = 1;
    do{
        echo $ii . "<br>";
        $ii++;

    } while ($ii <= 10);


echo "<br><br>";

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}


echo "<br><br>";
for ($i = 1; ; $i++) {
    if($i > 10) {
        break;
    }
    echo $i;
}

echo "<br><br>";
for($i = 1; $i <=50 ; $i++) {
    if(($i % 3 == 0 || $i % 2 == 0) && !($i % 6 == 0)) {
        echo $i . "<br>";
    }
}

*/

    #Haz una lista de todos los numeros impares del 1 al 20
    echo "<br><br>";
    ?>

    <ul>
        <?php
        for ($i = 1; $i <= 20; $i++) {
            if ($i % 2 != 0) {
                echo "<li> $i </li>";
            }
        }

        ?>
        <ul>


            <?php
            echo "<br><br>";

            #Suma todos los numeros pares del 1 al 20

            $sumita = 0;

            for ($i = 1; $i <= 20; $i++) {
                if ($i % 2 == 0) {
                    $sumita += $i;
                }
            }

            echo ("la suma de todos los pares es " . $sumita);

            echo "<br><br>";

            #Saca todos los numeros primos del 1 al 50 

            for ($i = 2; $i <= 50; $i++) {
                $primo = true;

                for ($j = 2; $j < $i && $primo; $j++) {
                    if ($i % $j == 0) {
                        $primo = false;
                    }
                }
                if ($primo) {
                    echo " " . $i;
                }
            }

            #Saca los primeros 50 numeros primos

            echo "<br><br>";
            $contador = 0;
            for ($i = 2; $contador < 50; $i++) {
                $primo = true;

                for ($j = 2; $j < $i && $primo; $j++) {
                    if ($i % $j == 0) {
                        $primo = false;
                    }
                }
                if ($primo) {
                    echo " " . $i;
                    $contador++;
                }
            }

            echo "<br><br>";

            $array1 = array(
                'key1' => 'value1',
                'key2' => 'value2',
                'key3' => 'value3',
            );

            $array2 = array('value1', 'value2', 'value3');

            print_r($array1); //Para imprimir array tiene que ser con print_r
            echo("<br><br>"); 
            print_r($array2);


            echo "<br><br>";
            echo "<br><br>";
            #Crear un array que tenga como keys los DNI de distintas personas y como valores sus nombres e imprimelos

            ?>
            <ul>
            <?php

            $array3 = array(
                '78302472E' => 'Juanjo Aguilar', 
                '35345453P' => 'Miguel Angel Castillo',
                '68768455L' => 'Laura Perez'
            );

            unset($array3['35345453P']);

            foreach($array3 as $dni => $nombre)
                print_r("<li> $dni se llama $nombre </li>");



                
            ?>
            </ul>

           
            <?php
             echo "<br><br>";
            $peliculas = [
                'El señor de los anillos: La comunidad del anillo',
                'El señor de los anillos : Las dos torres',
                'El señor de los anillos: El '
            ];
/*
            foreach ($peliculas as $peliculas) {
                echo $peliculas . "<br>";
            }

            */
            foreach ($peliculas as $key => $pelicula) {
                echo $key . " => " . $pelicula . "<br>";
            }
            ?>

</body>

</html>