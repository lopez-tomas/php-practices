<?php

declare(stric_types=1);
function cuadrado(int $number){
  return $number * $number;
}

$number = '2';
echo "El cuadrado de $number es: " . cuadrado($number);
