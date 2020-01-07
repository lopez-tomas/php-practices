<?php

$dias[] = 31;
$dias[] = 28;
$dias[] = 31;

echo $dias[0];
echo '<br />';
echo $dias[1];
echo '<br />';
echo $dias[2];
echo '<br /> <br />';

echo 'Tamaño del vector: ' . count($dias);
echo '<br /> <br />';

$nombres[]="Juan";
$nombres[]="Pedro";
$nombres[]="Ana";

for($i = 0; $i < count($nombres); $i++)
{
  echo $nombres[$i];
  echo "<br>";
}

?>
