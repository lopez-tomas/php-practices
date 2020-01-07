<?php

function suma($numero, $numero2){
  return $numero + $numero2;
}

include 'vista.php'; // Nos permite incluir un archivo dentro de este archivo

echo '<b>Hola</b>';

require 'vasdista.php'; // Usarlo cuando el archivo ES súper importante
include 'vasdista.php'; // Usarlo cuando el archivo NO ES súper importante

include_once ''; // Se usan para llamar UNA sola vez
require_once ''; // el archivo que deseemos

?>
