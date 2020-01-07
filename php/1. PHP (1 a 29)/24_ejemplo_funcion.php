<?php

function calcular_area_tringualo($base, $altura){
  $resultado = ($base * $altura) / 2;
  return $resultado;
}

$area_triangulo = calcular_area_tringualo(10, 10);

echo "El triangulo tiene un área de: $area_triangulo" . 'm².' . '<br />';

?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Area de un Triángulo</title>
  </head>
  <body>
    <h1> </h1>
  </body>
  </html>
