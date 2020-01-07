<?php

/* Esto sirve para saber si se enviaron los datos de un formulario. Si se tiene
   un solo formulario es recomendable utilizar este método. */

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  echo 'Se enviaron por POST';
} else{
  echo 'Se enviaron por GET';
}

/* Este es otro método para hacer lo de arriba, con la ventaja de poder saber de
   qué formulario se envió correctamente la información. Recomendable para más de
   un formulario en HTML. */

// if (isset($_POST['submit'])) {
//   echo 'Se han enviado los datos correctamente.';
//   print_r($_POST['submit']);
// }

?>
