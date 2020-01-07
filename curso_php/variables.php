<?php

# String: Cadena de texto
$nombre = "Tomás Lopez";

#Integer: Numeros enteros
$numero = 7;

# Double: Numeros con decimales
$numero_decimal = 7.7;

# Boolean: Verdadero o Falso (true / false)
$verdadero = false;

# Array: Arreglo
# Object: Objeto
# Class: Clase
# Null: Cuando a una variable aún no se le ha asignado ningún valor

echo $nombre . '<br />';
echo $numero . '<br />' . '<br />';

echo 'Hola, $nombre' . '<br />';
echo "Hola, $nombre" . '<br />' . '<br />';

# Recomendable usar esta forma al llamar variables y usar comillas simples
echo 'Hola, ' . $nombre . '<br />' . '<br />';

# gettype: para conocer el tipo de variable
echo gettype($nombre) . '<br />';
echo gettype($numero) . '<br />';

?>
