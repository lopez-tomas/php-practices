<?php

$paises = array(
  'México', 'España', 'Colombia', 'Perú',
  'Argentina', 'Venezuela', 'Guatemala'
);

foreach($paises as $pais){
  echo $pais . '<br />';

  if ($pais == 'España') {
    break;
  }
}

?>

<DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <title>Document</title>
</head>
<body>
  <h1>Paises Latinoamericanos</h1>
    <?php
      foreach($paises as $pais){
        if ($pais == 'España') {
          continue;
        }

        echo $pais . '<br />';
      }
    ?>
</body>
</html>
