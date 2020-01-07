<?php

$texto = ' < > & "" ';

echo htmlspecialchars($texto); // Nos convierte el código en entidades especiales
echo '<br />';

echo trim($texto); // Elimina todos los espacios en blancos, al inicio y final, de una cadena de texto
echo '<br />';

$texto2 = 'Hola Carlos';
echo strlen($texto2); // Calcular el tamaño de una cadena de texto, cuántos carácteres hay
echo '<br />';

echo substr($texto2, 0, 2); // substr(variable, desde dónde corta, cuántos caracteres)
echo '<br />';

echo strtoupper($texto2); // Cambia a mayúsculas
echo '<br />';

echo strtolower($texto2); // Cambia a minúsculas
echo '<br />';

echo strpos($texto2, 'H'); // strpos(variable, letra de la que quiero saber su posición)
echo '<br />';

## FUNCIONES DE CADENAS DE TEXTO ===> http://php.net/manual/en/ref.strings.php ##

?>
