<?php
 /**
  *todo: Decimo punto taller arrays 
  **Encontrar planetas comunes en dos sistemas solares
  */

  if (isset($_POST['sistema1']) && isset($_POST['sistema2'])) {

    $textoSistema1 = $_POST['sistema1'];
    $textoSistema2 = $_POST['sistema2'];


    $sistema1 = explode("\n", $textoSistema1);
    $sistema2 = explode("\n", $textoSistema2);


    $planetasComunes = array_intersect($sistema1, $sistema2);

    $textoPlanetasComunes = implode("\n", $planetasComunes);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Planetas comunes</title>
</head>
<body>
    <h1>Planetas comunes</h1>
    <p>Lista de planetas comunes en los dos sistemas solares:</p>
    <textarea rows="5" cols="30" readonly><?php echo $textoPlanetasComunes; ?></textarea>
</body>
</html>
 