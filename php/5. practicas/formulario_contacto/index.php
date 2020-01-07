<?php

$errores = '';
$enviado = '';

if (isset($_POST['submit'])){
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  if (!empty($nombre)) {
    $nombre = trim($nombre);
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
  } else{
      $errores .= "Por favor, ingresa un nombre. <br />";
  }

  if (!empty($correo)){
    $nombre = htmlspecialchars($nombre);
    $nombre = trim($nombre);
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

    if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
      $errores .= "Por favor, ingresa un correo válido. <br />";
    }

  } else{
    $errores .= " Por favor, ingresa un correo. <br />";
  }

  if (!empty($mensaje)){
    $mensaje = htmlspecialchars($mensaje);
    $mensaje = trim($mensaje);
    $mensaje = stripslashes($mensaje);
  } else{
    $errores .= "Por favor, ingresa el mensaje. <br />";
  }

  if (!$errores) {
    $enviar_a = 'xerathcarry@gmail.com';
    $asunto = 'Correo enviado desde miPagina.com';
    $mensaje_preparado = "De: $nombre \n";
    $mensaje_preparado .= "Correo: $correo \n";
    $mensaje_preparado .= "Mensaje: " . $mensaje;

    /* Función para enviar el correo. No funciona con el Panel de Control XAMPP.
       Tengo que subir mis archivos a un hosting para que funcione. */

    //mail($enviar_a, $asunto, $mensaje_preparado);

    $enviado = true;

  }

}

require 'index.view.php';

?>
