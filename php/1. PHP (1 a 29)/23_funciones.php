<?php

/* Funciones que he visto

  count(); // Conocer elementos de un arreglo
  sort(); // Ordenar de A-Z ; 1-9
  rsort(); // Ordenar de Z-A ; 9-1
  var_dump(); // Conocer la información de variables (detallada)
  print_r(); // Conocer la información de variables (menos detallada)

*/

function hello($name){
  return "Hello, $name!";
}

echo hello('Carlos') . '<br />';
echo hello('César') . '<br />';
echo hello('Alejandro') . '<br />';

echo '<br />';

function sumar($number1, $number2){
  $resultado = $number1 + $number2;
  return $resultado; // return devuelve el valor
  # ya no se ejecuta nada debajo de return
}

echo sumar(10, 15) . '<br />';
echo sumar(1, 158) . '<br />';
echo sumar(15, 25) . '<br />';

?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Funciones</title>
  </head>
  <body>
    <h1> </h1>
  </body>
  </html>
