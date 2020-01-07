<?php

$meses = array(
  'Enero', 'Febrero', 'Marzo', 'Abril',
  'Mayo', 'Junio', 'Julio', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

# Orden de A-Z ó 1-10
sort($meses);

#######################################################

$meses_dos = array(
  'Enero', 'Febrero', 'Marzo', 'Abril',
  'Mayo', 'Junio', 'Julio', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

# Orden de Z-A ó 10-1
rsort($meses_dos);

#######################################################

$numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);
sort($numeros);

#######################################################

$numeros_dos = array(1, 22, 23, 10, 9, 5, 70, 100, 20);
rsort($numeros_dos);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='UTF-8'>
  <title>Meses del Año</title>
</head>

<body>
  <h1>Meses del Año</h1>
  <ul>
    <?php
      echo 'Orden de A-Z:' . '<br />';
      foreach($meses as $mes){
        echo '<li>' . $mes . '</li>';
      }
      echo '<br />';

      echo 'Orden de Z-A:' . '<br />';
      foreach($meses_dos as $mes_dos){
        echo '<li>' . $mes_dos . '</li>';
      }
      echo '<br />';

      echo 'Orden de 1-100:' . '<br />';
      foreach($numeros as $numero){
        echo '<li>' . $numero . '</li>';
      }
      echo '<br />';

      echo 'Orden de 100-1:' . '<br />';
      foreach($numeros_dos as $numero_dos){
        echo '<li>' . $numero_dos . '</li>';
      }
    ?>
  </ul>
</body>

</html>
