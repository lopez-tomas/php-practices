<?php

/* Operadores Aritméticos:

+  Suma
-  Resta
*  Multiplicación
/  División
%  Módulo

-- */

//$numero = 10;
//$numero2 = 5;
//$numero3 = 6;

//$resultado = $numero + $numero2;
//echo '<h1>' . $resultado . '</h1>';

//$resultado2 = $numero - $numero2;
//echo '<h1>' . $resultado2 . '</h1>';

//$resultado3 = $numero / $numero2;
//echo '<h1>' . $resultado3 . '</h1>';

//$resultado4 = $numero * $numero2;
//echo '<h1>' . $resultado4 . '</h1>';

//$resultado5 = $numero % $numero2;
//echo '<h1>' . $resultado5 . '</h1>';

//$resultado6 = $numero % $numero3;
//echo '<h1>' . $resultado6 . '</h1>';


/* Operadores de Asignación:

=
+=
-+
*=
/=

*/

//$numero = 10;
//$numero2 = 5;

//$numero = $numero + 7;
//$numero += 7;
//echo $numero;

/* Operadores de Comparación:

==   Igualdad
===  Idéntico en valor como en tipo de dato
!=, <>  Diferente
!==  Diferente
>    Mayor que
<    Menor que
>=   Mayor e igual que
<=   Menor e igual que

*/

########### CTRL + / = Comentario rápido ###########

// $numero = '10'; // String
// $variable = 'true';
//
// if ($numero === 10){
//   echo 'Es idéntico.' . '<br />';
// } else {
//     echo 'Es diferente.' . '<br />';
// }
//
// if ($numero == 10){
//   echo 'Es idéntico.' . '<br />';
// } else {
//     echo 'Es diferente.' . '<br />';
// }
//
// if ($variable === true){
//   echo 'Es idéntico.' . '<br />';
// } else {
//     echo 'Es diferente.' . '<br />';
// }
//
// if ($variable == true){
//   echo 'Es idéntico.' . '<br />';
// } else {
//     echo 'Es diferente.' . '<br />';
// }
//
// if ($variable !== true){
//   echo 'string';
// }

/* Operadores Lógicos:

and, &&
or, ||
xor
!

*/

// $numero = 10;
//
// if ($numero >= 10 && $numero < 20) {
//   echo 'Ejecuta';
// }

/* Operadores de Incremento / Decremento:

++$x
$x++
--$x
$x--

*/

// $numero = 10;
// $numero = $numero + 1;
// $numero += 1;

// $numero++;
// ++$numero;
// echo $numero;
// echo $numero++;
// echo ++$numero;
// echo --$numero;

/* Operadores de Cadenas:

.
.=

*/

$texto = 'Cadena de Texto';
$texto2 = ' Una segunda Cadena de Texto';

$texto3 = $texto + $texto2;
echo $texto3 . '<br />';

$texto4 = $texto . $texto2;
echo $texto4 . '<br />';

$texto .= ' Una segunda Cadena de Texto';
echo $texto;

?>
