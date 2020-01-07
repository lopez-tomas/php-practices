<?php

$friends = array('phone' => 1169588711, 'age' => 20, 'country' => 'México');

echo '<h1> extract() </h1>';
extract($friends); // Extrae los elementos de un Array Asociativo como si fuesen variables.

  echo "<b>Phone:</b> $phone" . '<br />';
  echo "<b>Age:</b> $age" . '<br />';
  echo "<b>Country:</b> $country" . '<br />' . '<br />';

$week = array(
  'Lunes', 'Martes', 'Miércoles',
  'Jueves', 'Viernes', 'Sábado', 'Domingo'
);

echo '<h1> array_pop() </h1>';
$last_day = array_pop($week); // Extrae el último elemento al final de un Array y lo borra. Podemos guardarlo en una variable.

  foreach($week as $day){
    echo $day . '<br />';
  }

  echo '<br />';

$week2 = array(
  'Lunes', 'Martes', 'Miércoles',
  'Jueves', 'Viernes', 'Sábado', 'Domingo'
);
echo '<h1> join() </h1>';
echo join(' <br /> ', $week2); // Nos muestra cada unos de los elementos, separados por lo que coloquemos antes (, - |)

echo '<h1> count() </h1>';
echo count($week2); // Para cuántos elementos tenemos en un Array.
  echo '<br />';

echo '<h1> sort() & rsort() </h1>';
sort($week2); // Muestra un Array en orden ascendente.
  echo '<b> sort(): </b>' . join(', ', $week2) . '<br />';
rsort($week2); // Muetras un Array en orden descendente.
  echo '<b> rsort(): </b>' . join(', ', $week2);

$week3 = array(
  'Lunes', 'Martes', 'Miércoles',
  'Jueves', 'Viernes', 'Sábado', 'Domingo'
);
echo '<h1> array_reverse() </h1>';
$reverse_week = array_reverse($week3);
  echo join(', ', $reverse_week) . '<br />';// Invertir todos los valores de un Array.

?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Funciones para Arrays</title>
  </head>
  <body>
    <h1> </h1>
  </body>
  </html>
