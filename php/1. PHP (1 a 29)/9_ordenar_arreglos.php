<?php

$months = array(
  'Enero', 'Febrero', 'Marzo', 'Abril',
  'Mayo', 'Junio', 'Julio', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$numbers = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

sort($numbers);
// rsort($numbers);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Numbers</title>
</head>
<body>
  <h1>Numbers</h1>
  <ul>
    <?php

    foreach ($numbers as $number){
      echo '<li>' . $number . '</li>';
    }

    ?>
  </ul>
</body>
</html>
