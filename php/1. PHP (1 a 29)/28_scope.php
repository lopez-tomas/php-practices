<?php

$number = 7;

function showNumber($number){
  echo $number;
}

showNumber($number);
echo '<br />';

/* Cuando se quiera trabajar con variables que están fuera de una función:
1. Pasarla como parámetro en la función para que funcione.
*/

function showNumber2(){
  $number2 = 10;
  return $number2;
}

echo showNumber2();

/* Cuando se quiera trabajar con variables que están dentro de una función:
1. Colocar un "return $variable;" y el echo en el llamado de la función.
*/



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Scope</title>
</head>
<body>
  <h1> </h1>
</body>
</html>
