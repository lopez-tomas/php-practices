<?php

/*Operador de Nave Espacial: Se utiliza cuando queramos programar nuestros propios algoritmos de comparación. Por si queremos
comparar el código y alguna función de PHP no nos sirva, por lo tanto vamos a tener que crear nuestra propia forma de comparar
expresiones. */

// Regresa 1 si el valor de la izquierda es mayor que el de la derecha.
// Regresa 0 si los valores en ambos lados son iguales.
// Regresa -1 si el valor de la derecha es mayor que el de la izquierda.

// <   =   >
// 1   0  -1

echo 1 <=> 1; //Operador de Nave Espacial
  echo '<br />';
echo 10 <=> 1;
  echo '<br />';
echo 10 <=> 10;
  echo '<br />';
echo 1 <=> 10;
  echo '<br />' . '<br />';

$array = [3, 1, 5, 2, 4];
//sort($array); <= Si no existiera esta función, usaríamos la funcion comparar más larga y la más corta

// function comparar($a, $b){
//   if($a == $b){
//     return 0;
//   } else if($a > $b){
//       return 1;
//   } else{
//       return -1;
//   }
//}

function comparar($a, $b){
  return $a <=> $b;
}
usort($array, 'comparar'); // usrot($array, 'function'): Sirve igual que usort($array) pero se puede agregar una función.

echo implode(' - ', $array);

?>
