<?php
 /**
  *todo: Tercer punto taller arrays 
  **Filtrar planetas habitables
  */

$planetas = array('Sol'=>false,'Mercury'=>false,'Venus'=>false,'Earth'=>true,'Mars'=>true,'Jupiter'=>false,'Saturn'=>false,'Uranus'=>false,'Neptune'=>false);

$filtrados= array_filter($planetas,function($habitable){
    return $habitable;
});

echo "Planetas habitables: <br>";
foreach($filtrados as $planetas => $habitable){
    echo "$planetas <br>";
}

?>
 