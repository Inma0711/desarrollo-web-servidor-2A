
<?php
function max3 (int $num1, int $num2, int $num3) : string {
        if($num1 == $num2 && $num2 == $num3){
            return "Los tres numeros son iguales";
        }else{
            $candidato = $num1;

            if($num2 > $num1) {
                $candidato = $num2;
            }
            if($num3 > $candidato) {
                $candidato = $num3;
            }
            return "El mayor es $candidato";
        }

    }

    DEFINE("SUPERREDUCIDO", 4);
    DEFINE("REDUCIDO", 10);
    DEFINE("GENERAL", 21);
    DEFINE("SIN IVA", 0);


    function precioSinIva(float|int $precio, string $iva) : float {
        $iva = strtoupper($iva);
        $precioSinIva = match ($iva) {
            "SUPERREDUCIDO" => $precio - $precio * (SUPERREDUCIDO/100),
            "REDUCIDO" => $precio - $precio * (REDUCIDO/100),
            "GENERAL" => $precio - $precio * (GENERAL/100),
            "SIN IVA" => $precio
        };
        return $precioSinIva;
    }


    function precioConIva(float|int $precio, string $iva) : float {
        $iva = strtoupper($iva);
        $precioConIva = match ($iva) {
            "SUPERREDUCIDO" => $precio + $precio * (SUPERREDUCIDO/100),
            "REDUCIDO" => $precio + $precio * (REDUCIDO/100),
            "GENERAL" => $precio + $precio * (GENERAL/100),
            "SIN IVA" => $precio
        };
        return $precioConIva;
    }

    function salarioSinIRPF(int $dinero){
        return $dinero;
    }


 
    ?>