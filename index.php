<?php
 /**
  *todo: Sexto punto taller arrays 
  **Verificar la existencia de un planeta en un sistema solar
  */

  if (isset($_POST['nombre_planeta'])) {

    $nombrePlaneta = $_POST['nombre_planeta'];

    $planetas = array(
        "Mercurio",
        "Venus",
        "Tierra",
        "Marte",
        "Júpiter",
        "Saturno",
        "Urano",
        "Neptuno"
    );

    if (in_array($nombrePlaneta, $planetas)) {
        echo "El planeta $nombrePlaneta existe en el sistema solar.";
    } else {
        echo "El planeta $nombrePlaneta no existe en el sistema solar.";
    }
}

?>
 