<?php

$edad = 18;

if($edad >= 18){
  echo '<h1> Bienvenido </h1>';
} else {
    echo '<h1> No eres mayor de edad </h1>';
}

#################################################################

$mes = 'Diciembre';
# $mes = 'Enero';
# $mes = 'Julio';
# $mes = 'Agosto';

if ($mes == 'Diciembre'){
  echo '<h1> Feliz Navidad </h1>';
}
else if($mes == 'Enero'){
    echo '<h1> Feliz Año Nuevo </h1>';
}
else if($mes == 'Julio'){
    echo '<h1> Feliz Julio </h1>';
}
else {
    echo '<h1> El mes que escogiste no tiene celebración </h1>';
}

#################################################################

$mes_dos = 'Enero';
$verdadero = false;

if ($verdadero){
  echo "<h1> Verdadero </h1>";
}
else {
  echo "<h1> Falso </h1>";
}

$verdadero_dos = true;

if ($verdadero_dos){
  echo "<h1> Verdadero </h1> . <br />";
}
else {
  echo "<h1> Falso </h1>";
}

?>
