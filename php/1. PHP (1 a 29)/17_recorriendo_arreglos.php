<?php

$months = array(
  'Enero', 'Febrero', 'Marzo', 'Abril',
  'Mayo', 'Junio', 'Julio', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

for ($i=0; $i < count($months) ; $i++) {
  echo $months[$i] . '<br />';
}

echo '<br />';

$accountant = 0;
while ($accountant < count($months)) {
  echo $months[$accountant] . '<br />';

  $accountant++;
}

?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Document<title>
</head>
<body>
  <h1> </h1>
</body>
</html>
