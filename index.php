<?php
 /**
  *todo: Cuarto punto taller arrays 
  **Calcular la gravedad en diferentes planetas
  */
$gravedadR = array(
    "Mercurio" => 0.38,
    "Venus" => 0.91,
    "Tierra" => 1.00,
    "Marte" => 0.38,
    "Jupiter" => 2.53,
    "Saturno" =>  1.07,
    "Urano" => 0.92,
    "Neptuno" => 1.19
);
function calcularGravedad($Grelativa){
    $Greal = array();
    $Gtierra = 9.8;

    foreach($Grelativa as $planeta => $relativa){
        $Greal[$planeta] = $relativa * $Gtierra;
    }
    return $Greal;
}

$Greal = calcularGravedad($gravedadR);
echo "Gravedad aprox de los planetas: <br>";
foreach($Greal as $planeta => $gravedad){
    echo "$planeta:$gravedad m/s^2 <br>";
}


?>
 