<?php
 /**
  *todo: Noveno punto taller arrays 
  **Eliminar elementos duplicados de una lista de especies alienígenas
  */

  if (isset($_POST['especies'])) {

    $textoEspecies = $_POST['especies'];

    $especies = explode("\n", $textoEspecies);

    $especiesUnicas = array_unique($especies);

    $textoEspeciesUnicas = implode("\n", $especiesUnicas);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Especies alienígenas</title>
</head>
<body>
    <h1>Especies alienígenas despues del filtro</h1>
    <p>Lista de especies alienígenas sin duplicaciones:</p>
    <textarea rows="5" cols="30" readonly><?php echo $textoEspeciesUnicas; ?></textarea>
</body>
</html>
 
 