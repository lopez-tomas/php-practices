<?php

// print_r($_POST);

if (!$_POST){
  header('Location: http://localhost/curso_php/formularios/index.php');
}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];

echo "Hola, $nombre, eres $sexo y naciste en el año $year";

// print_r($_GET);

// if (!$_GET){
//   header('Location: http://localhost/curso_php/formularios/');
// }
//
// $nombre = $_GET['nombre'];
// $sexo = $_GET['sexo'];
// $year = $_GET['year'];
// $terminos = $_GET['terminos'];
//
// if ($nombre){
//   echo htmlspecialchars($nombre) . '<br />';
// } else {
//     echo 'El usuario no estableció su nombre' . '<br />';
// }
//
// if ($sexo){
//   echo htmlspecialchars($sexo) . '<br />';
// } else {
//     echo "El usuario no estableció su sexo" . '<br />';
// }
//
// if ($terminos){
//   echo htmlspecialchars($terminos) . '<br />';
// } else {
//     echo 'El usuario no aceptó los términos' . '<br />';
// }
// echo htmlspecialchars($year) . '<br />';


?>
