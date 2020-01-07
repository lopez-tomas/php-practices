<?php

# Obteniendo datos mediante el método POST: Se utiliza con información sensible, como contraseñas o bases de datos.

// print_r($_POST);

if(!$_POST){
  header('location: http://localhost/php/formularios/');
}

# Variables de información #

$name = $_POST['name'];
$sex = $_POST['sex'];
$year = $_POST['year'];
$terms = $_POST['terms'];


# Obteniendo datos mediante el método GET: No se usa con información sensible. Se utiliza solo para traer información y mostrarla.

//print_r($_GET);

// if(!$_GET){
//   header('Location: http://localhost/php/formularios/');
// }
//
// $name = $_GET['name'];
// $sex = $_GET['sex'];
// $year = $_GET['year'];
// $terms = $_GET['terms'];

# IFs de información #

  if ($name){
    echo $name . '<br />';
  } else{
      echo "El usuario no estableció su nombre." . '<br />';
  }

  if ($sex){
    echo $sex . '<br />';
  } else{
      echo "El usuario no estableció su sexo." . '<br />';
  }

  if ($year == '----'){
    echo "El usuario no estableció su año de nacimiento." . '<br />';
  } else{
      echo $year . '<br />';
  }

  if ($terms){
    echo $terms . '<br />';
  } else{
      echo "El usuario no aceptó los términos." . '<br />';
  }

?>
