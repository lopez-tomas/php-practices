<?php
echo '<h1><b>Área de un triángulo</h1></b>';

function calcular_area_triangulo($base, $altura){
  $area = ($base * $altura) / 2;
  return $area;
}

$area_triangulo = calcular_area_triangulo(10,10);

echo 'El triángulo tiene un área de ' . $area_triangulo . ' metros cuadrados.' . '<br />';
#################################################################################
echo '<h1><b>Longitud de Circuferencia)</h1></b>';

function calcular_longitud_circunferencia($radio){
  $longitud = 2 * M_PI * $radio; // M_PI = el valor de PI
  return $longitud;
}

$longitud_circunferencia = calcular_longitud_circunferencia(5);

echo 'La circunferencia tiene una longitud de ' . $longitud_circunferencia . '.' . '<br />';
#################################################################################
echo '<h1><b>Cantidad de diagonales</h1></b>';

function numero_diagonales_poligono($lados){
  $cantidad_diagonales = ($lados * ($lados - 3)) / 2;
  return $cantidad_diagonales;
}

$diagonales = numero_diagonales_poligono(4);

echo 'La cantidad de diagonales del polígono es de ' . $diagonales . '.' . '<br />';
#################################################################################
echo '<h1><b>Medida de la Hipotenusa</h1></b>';

function teorema_pitagoras($cateto_b, $cateto_c){
  $lado_a= sqrt($cateto_b * $cateto_b + $cateto_c * $cateto_c); // sqrt() es raíz cuadrada
  return $lado_a;
}

$hipotenusa = teorema_pitagoras(2, 2);

echo 'La medida de la hipotenusa es de ' . $hipotenusa . '.';

?>
