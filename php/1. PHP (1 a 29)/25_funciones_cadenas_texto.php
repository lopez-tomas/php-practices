<?php

$text = '< > & "" ';
$text2 = '<b>Hola</b>';

echo '<b>htmlspecialchars</b>: ' . htmlspecialchars($text); // Convierte el código en entidades especiales. Los usuarios no van a poder inyectar código en nuestro sitio web
  echo '<br />';
echo '<b>htmlspecialchars</b>: ' . htmlspecialchars($text2);
  echo '<br />';

$text3 = 'Hola ';

echo '<b>trim</b>: ' . trim($text3); // Elimina todos los espacios en blanclo de una cadena de texto (principio y final)
  echo '<br />';

echo '<b>strlen</b>: ' . strlen($text3); // Calcula el tamaño de un string. Cuenta los espacios también.
  echo '<br />';

$text4 = substr($text3, 0, 3); // Permite retornarnos el pedazo de una línea de una cadena de texto.
  echo '<b>substr</b>: ' .$text4;
  echo '<br />';

echo '<b>strtoupper</b>: ' . strtoupper($text3); // Convierte la cadena de texto a Mayúsculas.
  echo '<br />';
echo '<b>strtolower</b>: ' . strtolower($text3); // Convierte la cadena de texto a Minúsculas.
  echo '<br />';

$text5 = strpos($text3, 'o'); // Saber en qué posición se encuentra una letra.
  echo "<b>strpos</b>: $text5";
  echo '<br />';

?>

<!DOCTYPE html>
  <html lang"en">
  <head>
    <meta charset="utf-8">
    <title>Funciones para Strings</title>
  </head>
  <body>
    <h1> </h1>
  </body>
  </html>
