<?php
echo '<h1><b>Función round()</h1></b>';

$numero = 15.785;
$numero2 = 15.185;

echo round($numero) . '<br />'; // Redondea un número
echo round($numero2) . '<br />';
echo round($numero2, 3) . '<br />' . '<br />';  // Para saber cuántos decimales
                                               // queremos mostrar
###############################################################################
echo '<h1><b>Función rand()</h1></b>';

$numero3 = rand(1, 10);     // Nos permite obtener un número al azar
echo $numero3 . '<br />';  // entre dos números que establezcamos
###############################################################################
echo '<h1><b>Función ceil()</h1></b>';

echo ceil(12.1) . '<br />'; // Redondea un número hacia arriba
###############################################################################
echo '<h1><b>Constante: Valor de PI</h1></b>';

echo M_PI; // Valor de PI

?>
