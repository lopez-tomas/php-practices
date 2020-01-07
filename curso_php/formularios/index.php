<?php

if ($_POST){
  echo $_POST['nombre'];
}

?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="" id="" class="">
    <input type="text" placeholder="Nombre:" name="nombre">
    <br>

    <label for="hombre">Hombre</label>
    <input type="radio" name="sexo" value="hombre" id="hombre">

    <label for="mujer">Mujer</label>
    <input type="radio" name="sexo" value="mujer" id="mujer">
    <br />

    <select name="year" id="year">
      <?php
      for($i = 1900 ; $i <= 2018 ; $i++){
        echo "<option value = '$i'>$i</option>";
      }
      ?>
    </select>
    <br />

    <br />
    <label for="terminos">¿Acepta los términos?</label>
    <input type="checkbox" name="terminos" id="terminos" value="ok">
    <br />

    <input type="submit" value="Enviar">
  </form>
</body>
</hmtl>
