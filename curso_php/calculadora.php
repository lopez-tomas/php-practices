<?php

/*function calcular_area_triangulo($base,$altura){
  $base = $_REQUEST['valor1'];
  $altura = $_REQUEST['valor2'];
  $area = ($base * $altura) / 2;
  return $area;
}
*/

$base = $_REQUEST[''];
$altura = $_REQUEST[''];
$area = ($base * $altura) / 2;

echo 'El triángulo tiene un Area: ' + $area + 'm².' . '<br />';

?>
