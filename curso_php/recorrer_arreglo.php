<?php

$meses = array(
  'Enero', 'Febrero', 'Marzo', 'Abril',
  'Mayo', 'Junio', 'Julio', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

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
    <li>Enero</li>
    <li>Febrero</li>
    <li><?php echo $meses[0]; ?></li>
    <li><?php echo $meses[1]; ?></li>
    <li><?php echo $meses[2] . '<br />'; ?></li>

      <?php

      # De esta forma me repite ENERO la cantidad de veces que
      # tenga como elementos en el ARRAY
      foreach($meses as $mes){
        echo '<li>' . $meses[0] . '</li>';
      }

      # Correctamente el CICLO FOREACH se usa así para llamar
      # a todos los meses que tengo en el ARRAY
      foreach($meses as $mes){
        echo '<li>' . $mes . '<br />';
      }

      ?>

  </ul>
</body>

</html>
