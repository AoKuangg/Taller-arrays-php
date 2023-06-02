<?php
 /**
  *todo: Primer punto taller arrays 
  **Identificar planetas y sus respectivos numeros de orden en el sistema solar
  */
$planetas = array('Sol'=>0,'Mercury'=>1,'Venus'=>2,'Earth'=>3,'Mars'=>4,'Jupiter'=>5,'Saturn'=>6,'Uranus'=>7,'Neptune'=>8);
$buscarn = array_flip($planetas);
print_r($buscarn);

$coso =  array_search('4',array_keys($buscarn));
echo '<br>';
if ($coso !== false){
    $planetaBuscado = $buscarn[$coso];
    echo "Planet found: " . $planetaBuscado;
}