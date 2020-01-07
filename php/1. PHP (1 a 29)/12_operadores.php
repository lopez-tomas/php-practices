<?php

/* Operadores Aritméticos:

+ Suma
- Resta
* Multiplicación
/ División
% Diferencia en una división (módulo)

-- */

$number = 10;
$number2 = 6;

$result = $number % $number2;
// echo $result;

/* Operadores de Asignación:

=
+=
-+
*=
/=

-- */

$number3 = 10;
$number4 = 5;

// $number3 = $number3 + 7;
$number3 += 7;
echo $number3 . '<br />';

/* Operadores de Comparación:

== Igualdad
=== Idéntico
!=, <> Diferente
!==
>
<
>=
<=

-- */

$number4 = '10';
// $var = 'true';

if ($number4 === 10) {
  echo 'Es idéntico.' . '<br />';
} else{
  echo 'Es diferente.' . '<br />';
}

/* Operadores Lógicos:

and, &&
or, ||
xor
!

-- */

$number5 = 10;

if ($number5 >= 10 && $number5 < 20) {
  echo 'Ejecuta' . '<br />';
}

/* Operadores de Incremento / Decremento:

++$x (++$variable)
$x++ ($variable++)
--$x (--$variable)
$x-- ($variable--)

-- */

$number6 = 10;
// $number6 = 10 + 1;
// $number6 += 1;
$number6++;
echo $number6 . '<br />';

/* Operadores de Cadenas:

.
.=

--*/

$text =  'Cadena de texto';
$text2 = ' Una segunda cadena de texto';

$text3 = $text . $text2;
echo $text3 . '<br />';

$text4 = 'X';
$text4 .= 'D';

echo $text4;

?>
