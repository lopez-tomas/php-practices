<?php

$numero = 7; // Variable global

function mostrarNumero($numero){    // Las funciones no pueden acceder a las
  echo $numero . '<br /> <br />';  // variables, habría que pasarlas a parámetros
}

mostrarNumero($numero);

/* Cuando se quieran trabajar con variables que están fuera de una función
  1ro) Hay que pasar la variable como parámetro.
  Tampoco podemos acceder a una variable que está dentro de una función.
  Habría que hacer lo que está debajo para que funcionara.
*/

function mostrarNumero2(){
  $numero2 = 10;
  return $numero2;
}

echo mostrarNumero2();

?>
