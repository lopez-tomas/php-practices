<?php

$months = array(
  'Enero', 'Febrero', 'Marzo', 'Abril',
  'Mayo', 'Junio', 'Julio', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$alejandro = array('Name' => 'Alejandro', 'Phone' => 1169588711, 'Age' => 20, 'Country' => 'México');

?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Months and Dates</title>
</head>
<body>
  <ul>
    <?php
      echo '<h1> Months </h1>' . '<br />';

      foreach ($months as $month){
        echo '<li>' . $month . '</li>';
      }

      echo '<br />';
      echo '<h1> User </h1>';

      foreach($alejandro as $info => $valor){
          echo '<li>' . $info . ' : ' . $valor . '</li>';
      }

    ?>
  </ul>
</body>
</html>
