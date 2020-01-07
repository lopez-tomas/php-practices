<?php

if (!$_POST){
  header('Location: http://localhost/curso_php/pagina1.php');
}

$cant = 0;

if (isset($_REQUEST['check1'])){
  $cant++;
}
if (isset($_REQUEST['check2'])){
  $cant++;
}
if (isset($_REQUEST['check3'])){
$cant++;
}
if (isset($_REQUEST['check4'])){
  $cant++;
}

echo 'Hola, '. '<b>' . $_REQUEST['nombre'] . '</b>' . '. <br />';
echo "Practicás <b>$cant</b> deportes.";

?>
