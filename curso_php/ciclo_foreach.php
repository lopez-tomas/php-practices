<?php

$meses = array(
  'Enero', 'Febrero', 'Marzo', 'Abril',
  'Mayo', 'Junio', 'Julion', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$alejandro = array('Teléfono' => 1169588711, 'Edad' => 20, 'País' => 'Argentina');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Meses y Datos</h1>
  <ul>
    <?php
      foreach($meses as $mes){
        echo '<li>' . $mes . '</li>';
      }

      echo '<br />';

      foreach($alejandro as $dato => $valor){
        echo '<li>' . $dato . ': ' . $valor . '</li>';
      }

     ?>
  </ul>
</body>
</html>
