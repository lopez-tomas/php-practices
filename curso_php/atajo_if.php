<?php

$edad = 18;

$edad = (isset($edad)) ? $edad : 'El usuario no estableció su edad';

if (isset($edad)){
  $edad = $edad;
} else{
  $edad = 'El usuario no estableción su edad';
}

echo 'Edad: ' . $edad;

?>
