<?php

# Funciones que hemos utilizado:

// count();
// sort();
// rsort();
// var_dump();
// print_r();

function saludo($nombre){
  echo "¡Saludos, $nombre!";
  echo '<br />';
}

saludo('Carlos');
saludo('Alejandro');
saludo('Manuel');

function sumar($numero1, $numero2){
  $resultado = $numero1 + $numero2;
  echo '<br />';
  echo $resultado;
}

sumar(10, 15);
sumar(1, 158);
sumar(15, 25);

function sumar2($numero3, $numero4){
  $resultado2 = $numero3 + $numero4;
  echo '<br />';
  return $resultado2;
  // Después de return NO se puede escribir más código debajo
}

$resultado = sumar(10, 15);

function saludo2($nombre2){
  return "Saludos, $nombre2";
}

echo saludo2('Cesar') . '<br />';
echo saludo2('Alejandro') . '<br />';
echo saludo2('Manuel') . '<br />';

?>
