<?php
session_start(); // Se agrega en todas las páginas en donde vamos a trabajar sesiones.

$_SESSION['nombre'] = 'Carlos';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sessions</title>
</head>
<body>
  <h1>Página de Inicio</h1>
  <p></p>
  <a href="pagina2.php">Ir a la página 2</a>
</body>
</html>
