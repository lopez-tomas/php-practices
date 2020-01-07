<?php

// if(condicion){
//  // Instrucciones
// }

/* Operadores de comparación:

== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negación

*/

/* Operadores lógicos:

&& - Evalua que se cumpla una de las dos condiciones
||, OR - Evalua que se cumpla al menos una condición
xor - Evalua que se cumpla una y solo una condición

*/

$edad = 18;
$edad_dos = 17;
$nombre = 'Carlos';

if($edad >= 18 && $nombre == 'Carlos'){
  echo '<h1> Bienvenido </h1>';
}

if ($edad_dos < 18 or $nombre != 'Carlos'){
  echo '<h1> Eres menor de edad y/o no te llamas Carlos </h1>';
}

if ($edad_dos >= 18 || $nombre == 'Carlos'){
  echo '<h1> Bienvenido </h1>';
}

# Esta condición no se muestra ya que lleva XOR, ya que debe
# debe cumplirse 1 y solo 1 condición para habilitarse 
if ($edad >= 18 xor $nombre == 'Carlos'){
  echo '<h1> Bienvenido </h1>';
}

if ($edad_dos >= 18 xor $nombre == 'Carlos'){
  echo '<h1> Bienvenido </h1>';
}

?>
