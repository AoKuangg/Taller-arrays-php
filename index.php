<?php
 /**
  *todo: Octavo punto taller arrays 
  **Seleccionar un planeta aleatorio para explorar
  */

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

$indiceAleatorio = array_rand($planetas);
$planetaSeleccionado = $planetas[$indiceAleatorio];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la exploración</title>
</head>
<body>
    <h3>Resultado de la exploración</h3>
    <p>El explorador va a explorar el planeta: <?php echo $planetaSeleccionado; ?></p>
</body>
</html>
 