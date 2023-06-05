<?php
 /**
  *todo: Onceavo punto taller arrays 
  **Encontrar planetas únicos en dos sistemas solares
  */

  if (isset($_POST['sistema1']) && isset($_POST['sistema2'])) {
    $textoSistema1 = $_POST['sistema1'];
    $textoSistema2 = $_POST['sistema2'];

    $sistema1 = explode("\n", $textoSistema1);
    $sistema2 = explode("\n", $textoSistema2);

    $planetasUnicosSistema1 = array_diff($sistema1, $sistema2);
    $planetasUnicosSistema2 = array_diff($sistema2, $sistema1);

    $textoPlanetasUnicosSistema1 = implode("\n", $planetasUnicosSistema1);
    $textoPlanetasUnicosSistema2 = implode("\n", $planetasUnicosSistema2);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Planetas únicos</title>
</head>
<body>
    <h3>Planetas únicos</h3>
    <p>Lista de planetas únicos en cada sistema solar:</p>
    <h2>Sistema solar 1:</h2>
    <textarea rows="5" cols="30" readonly><?php echo $textoPlanetasUnicosSistema1; ?></textarea>
    <h2>Sistema solar 2:</h2>
    <textarea rows="5" cols="30" readonly><?php echo $textoPlanetasUnicosSistema2; ?></textarea>
</body>
</html>