<?php

$age = 16;

if($age >= 18){
  echo '<h1> Bienvenido </h1>';
} else{
  echo "<h1> No eres mayor de edad </h1>";
}

echo '<br />';

$month = 'Enero';
$true = false;

if($true){
  echo 'True';
} else{
  echo "False";
}

echo '<br />';

if ($month == 'Diciembre'){
  echo 'Feliz Navidad';
} else if($month == 'Enero'){
  echo 'Feliz Año Nuevo';
} else if($month == 'Julio'){
  echo 'Feliz Día de la Independencia';
} else{
  echo 'El mes que pusiste no tiene celebración';
}


?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Document</title>
</head>
<body>
  <h1> </h1>
</body>
</html>
