<?php

function suma($number, $number2){
  return $number + $number2;
}

require 'index.view.php';

/* include 'x'; Si falla, se ejecuta el resto del código. Para archivos no muy importantes.
   require 'x'; Si falla, no se ejecuta el resto del código. Para archivos importantes y evitar problemas de seguridad.
*/

/* include_once 'x'; Para que traer un archivo una sola vez, para evitar muchas ejecuciones.
   require_once 'x'; Para que traer un archivo una sola vez, para evitar muchas ejecuciones.
*/

?>
