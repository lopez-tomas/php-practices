<?php
session_start();

if ($_SESSION) {
  $nombre = $_SESSION['nombre'];
  echo "<h1>Hola, $nombre</h1>";
  // print_r($_SESSION);
} else{
  echo "No has iniciado sesión.";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Página 2</title>
  </head>
  <body>
    <a href="cerrar.php">Cerrar sesión</a>
  </body>
</html>
