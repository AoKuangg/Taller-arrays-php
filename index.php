<?php
 /**
  *todo: Doceavo punto taller arrays 
  **Crear una lista de satélites para un planeta
  */

  if (isset($_POST['planeta']) && isset($_POST['satelites'])) {
    $planeta = $_POST['planeta'];
    $satelites = $_POST['satelites'];

    $arraySatelites = explode("\n", $satelites);

    $listaSatelites = [];
    if (file_exists('satelites.txt')) {
        $listaSatelites = unserialize(file_get_contents('satelites.txt'));
    }

    $listaSatelites[$planeta] = array_merge($listaSatelites[$planeta] ?? [], $arraySatelites);

    file_put_contents('satelites.txt', serialize($listaSatelites));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rastreador de satélites</title>
</head>
<body>
    <h1>Rastreador de satélites</h1>
    <?php

    if (isset($_POST['planeta'])) {
        $planetaSeleccionado = $_POST['planeta'];
        echo "<h2>Satélites de $planetaSeleccionado:</h2>";
        
        if (isset($listaSatelites[$planetaSeleccionado])) {
            $satelitesPlaneta = $listaSatelites[$planetaSeleccionado];
            foreach ($satelitesPlaneta as $satelite) {
                echo "$satelite<br>";
            }
        } else {
            echo "No se encontraron satélites para $planetaSeleccionado.";
        }
    }
    ?>
</body>
</html>
 