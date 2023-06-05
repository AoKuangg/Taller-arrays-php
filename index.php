<?php
 /**
  *todo: Treceavo punto taller arrays 
  **Revertir el orden de los planetas en un sistema solar
  */

  if (isset($_POST['planetas'])) {
    $planetas = $_POST['planetas'];

    $arrayPlanetas = explode("\n", $planetas);

    $arrayPlanetasInvertido = array_reverse($arrayPlanetas);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Invertir el orden de los planetas</title>
</head>
<body>
    <h3>Invertir el orden</h3>
    <?php
    if (isset($arrayPlanetasInvertido)) {
        echo "<h5>Orden invertido de los planetas:</h5>";
        foreach ($arrayPlanetasInvertido as $planeta) {
            echo "$planeta<br>";
        }
    }
    ?>
</body>
</html>