<?php
 /**
  *todo: Segundo punto taller arrays 
  **Crear un array para un sistema solar
  */
    if (isset($_POST['numP'])){
        $numP = $_POST['numP'];
    
        $sistemaInventado = array();

        for ($i = 1; $i <= $numP; $i++) {
            $sistemaInventado["Planeta $i"] = 'Deshabitado';
        }

        echo "Estado inicial del sistema es:"."<br>";
        foreach ($sistemaInventado as $planeta => $estado) {
            echo "$planeta: $estado";
            echo "<br>";
        }
}

?>
 