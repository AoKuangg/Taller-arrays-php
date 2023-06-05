<?php
 /**
  *todo: Sexto punto taller arrays 
  **Verificar la existencia de un planeta en un sistema solar
  */

  if (isset($_POST['nombre_nave'])) {

    $nombreNave = $_POST['nombre_nave'];

    $tiposNaves = array(
        "Caza",
        "Nave de carga",
        "Explorador",
        "Nave nodriza",
        "Nave de combate"
    );

    if (in_array($nombreNave, $tiposNaves)) {
        echo "El tipo de nave espacial $nombreNave está presente en la flota.";
    } else {
        echo "El tipo de nave espacial $nombreNave no está presente en la flota.";
    }
}
?>
 