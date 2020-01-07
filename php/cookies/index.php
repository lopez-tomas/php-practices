<?php

// Cookies: Solo se pueden guardar hasta 4MB de texto.
// Se usa para guardar información del usuario, como las preferencias del sitio.
setcookie('font-size', '40px', time() - 60 * 60 * 24 * 30, '/');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
  <body>
    <h1>Cookie Seteada</h1>
  </body>
</html>
