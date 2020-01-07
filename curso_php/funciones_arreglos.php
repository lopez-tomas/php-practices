<?php

$amigo = array('telefono' => 1169588711, 'edad' => 20, 'pais' => 'México');

extract($amigo);  // Sirve para extraer los elementos de un arreglo asociativo
                 // como si fuesen variables

echo '<h1><b> Función extract()</h1></b>';

echo "<b>Teléfono:</b> $telefono <br />";
echo "<b>Edad:</b> $edad años <br />";
echo "<b>País:</b> $pais <br />";

echo '<br />';
###############################################################################

$semana = array(
  'Lunes', 'Martes', 'Miércoles',
  'Jueves', 'Viernes', 'Sábado', 'Domingo'
);

$ultimo_dia = array_pop($semana);  // Extrae el último elemento al final de
                                   // un arreglo y lo elimina, lo podemos
                                  // guardar en una variable
echo '<h1><b> Función array_pop()</h1></b>';

foreach ($semana as $dia) {
  echo $dia . '<br />';
}
echo '<br />';
echo $ultimo_dia . '<br />';
echo '<br />';
###############################################################################
echo '<h1><b> Función join()</h1></b>';

echo join(' - ', $semana);  // join(' , ') ; join(' - ') ; join('-') ; etc.
                           // Sirve para separar nuestro arreglamos como más
                          // queramos.
echo '<br />';
echo '<br />';

###############################################################################
echo '<h1><b> Función count()</h1></b>';

echo count($semana);  // Permite saber cuántos elementos tenemos en el arreglo
echo '<br />';
echo '<br />';
###############################################################################
echo '<h1><b> Función sort() y rsort()</h1></b>';

sort($semana);  // Ordean alfabético A-Z
echo join(', ', $semana);
echo '<br />';
echo '<br />';

rsort($semana);  // Orden alfabético Z-A
echo join(', ', $semana);
echo '<br />';
echo '<br />';
###############################################################################
echo '<h1><b> Función array_reverse()</h1></b>';

$semana2 = array(                           // Me afectaba el array_pop(), por
  'Lunes', 'Martes', 'Miércoles',          // lo que tuve que crear otro
  'Jueves', 'Viernes', 'Sábado', 'Domingo'
);

$semana_reverse = array_reverse($semana2);  // Contrario al array original
echo join(', ', $semana_reverse);
echo '<br />';

## FUNCIONES DE ARREGLOS ===> http://php.net/manual/es/ref.array.php ##

?>
