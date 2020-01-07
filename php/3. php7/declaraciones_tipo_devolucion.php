<?php

declare(stric_types=1); // Estrictamente tiene que ser un valor "int" o el dato que queramos, por lo tanto dará error de no ser el caso.
function obtenerEdad() : int{ // Con ese "int", la función (obligatoriamente) regrese un entero.
  $age = 'Carlos tiene 23 años';
  return $age;
}

echo obtenerEdad();

?>
