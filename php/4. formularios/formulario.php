<?php

$errores = '';

if(isset($_POST['submit'])){
  $nombre = $_POST['nombre'];
  $correo = $_POST['email'];

  if (!empty($nombre)){
    // $nombre = trim($nombre); // Quita los espaciados al inicio y al final.
    // $nombre = htmlspecialchars($nombre); // Convierte los caracteres especiales en entidades HTML.
    // $nombre = stripslashes($nombre); // Remueve los simbolos, por ej. "\", para que el usuario no pueda inyectar codigo.

    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); /* Tomás el contenido de la variable y le aplicamos un filtro, que remueve los
                                                              signos que no deben de ir. */
    echo "Tu nombre es: $nombre. <br />";
  } else{
      $errores .= 'Por favor, agrega un nombre. <br />';
  }

  if (!empty($correo)){

    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)){
      $errores .= 'Por favor, ingresa un correo válido. <br />';
    } else{
      echo "Tu correo es: $correo.";
    }
  } else{
      $errores .= 'Por favor, agrega un correo.';
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Formulario</title>
  <style>
    .error{color:red;}
  </style>
</head>
<body>
  <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

    <input type="text" placeholder="Nombre..." name="nombre">
    <br>
    <input type="text" placeholder="Correo..." name="email">
    <br>

    <label for="hombre">Hombre</label>
    <input type="radio" name="sex" value="hombre" id="hombre">

    <label for="mujer">Mujer</label>
    <input type="radio" name="sex" value="mujer" id="mujer">
    <br>

    <?php if(!empty($errores)): ?>
      <div class="error"><?php echo $errores; ?></div>
    <?php endif; ?>

    <input type="submit" name="submit" value="Enviar">

  </form>
</body>
</html>
