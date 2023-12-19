
<?php
     
     function cambiarDivisa (int $dinero, string $m1, string $m2){
        $m1 = strtoupper($m1);
        $m2 = strtoupper($m2);
    
        $tFinal = match(true) {
            $m1 == "E" && $m2 == "D" => ($dinero* 1.07),
            $m1 == "E" && $m2 == "Y" => ($dinero*157.56),
            $m1 == "D" && $m2 == "E" => ($dinero*0.94),
            $m1 == "D" && $m2 == "Y" => ($dinero*148.73),
            $m1 == "Y" && $m2 == "E" => ($dinero*0.0063),
            $m1 == "Y" && $m2 == "D" => ($dinero*0.0067),
            $m1 == $m2 => $dinero
        };
        return $tFinal;
    };
    


    function sumatorio(int $num) : int {
        $suma = 0;
        for($i = 1; $i <= $num; $i++){
            $suma += $i;
        };
        return $suma;

    };

    function factorial(int $num) : int {
        $multi = 1;
        for($i = 1; $i <= $num; $i++){
            $multi *= $i;
        };
        return $multi;
    };


    function comprobarEstado(int $num) : string {
        if($num == 0) {
            return "Extinto";
        } else if($num>0 && $num<=500) {
            return "peligro critico";
        } else if($num>500 && $num<=2000) {
            return "En peligro";
        }else {
            return "Amenazado";
        }
    }


    ?>