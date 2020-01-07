<?php

$months = array(
  'Enero', 'Febrero', 'Marzo', 'Abril',
  'Mayo', 'Junio', 'Julio', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Months of the Year</title>
</head>
<body>
  <h1>Months of the Year</h1>
  <ul>
    <?php

    foreach ($months as $month){
      echo '<li>' . $month . '</li>';
    }

    ?>
  </ul>
</body>
</html>
