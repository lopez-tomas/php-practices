<?php

if (!$_POST){
  header ('Location: http://localhost/curso_php/impuesto.php');
}

if ($_REQUEST['ingresos']=='altos'){
  echo 'Hola, ' . "<b>".$_REQUEST['nombre']."</b>" . ". Usted <b>debe</b> pagar impuestos a las ganancias.";
}
else{
  echo 'Hola, ' . "<b>".$_REQUEST['nombre']."</b>" . ". Usted <b>no</b> debe pagar impuestos a las ganancias.";
}

?>
