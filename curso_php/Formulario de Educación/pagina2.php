<?php

if (!$_POST){
  header('Location: http://localhost/curso_php/pagina1.php');
}

$nombre = $_POST['nombre'];
$estudio = $_POST['estudio'];

if ($_POST['estudio']=="Sin estudio"){
  echo "Hola, $nombre, tus estudios alcazaron hasta: <b>$estudio</b>";
}
else if ($_POST['estudio']=='Primaria'){
  echo "Hola, $nombre, tus estudios alcanzaron hasta: <b>$estudio</b>";
}
else if ($_POST['estudio']=='Secundaria'){
  echo "Hola, <b>$nombre</b>, tus estudios alcanzaron hasta: <b>$estudio</b>";
}
else {
}

?>
