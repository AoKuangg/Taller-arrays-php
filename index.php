<?php
 /**
  *todo: Quinto punto taller arrays 
  **Calcular la masa total de una flota de naves espaciales
  */

    $naves = array(
        "Nave 1" => 1000,
        "Nave 2" => 1500,
        "Nave 3" => 2000,
        "Nave 4" => 2500,
        "Nave 5" => 3000,
    );
    function calcularMasaTotal($naves){
        $masaTotal = 0;
        foreach($naves as $nave => $masa){
            $masaTotal += $masa;
        }
        return $masaTotal;
    }

    $masaTotal = calcularMasaTotal($naves);

    print_r($naves);
    echo "<br> La masa total de la flora de naves es: $masaTotal kg";


?>
 