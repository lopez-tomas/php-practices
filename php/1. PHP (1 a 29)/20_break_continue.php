<?php

$countries = array(
  'México', 'España', 'Colombia', 'Perú',
  'Argentina', 'Venezuela', 'Guatemala'
);

echo '<h1> Countries (Break) </h1>';

foreach ($countries as $country) {
  echo '<li>' . $country . '</li>';

  if ($country == 'España') {
    break;
  }
}

echo '<br />';

?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Break and Continue</title>
</head>
<body>
  <h1>Latinoamerican Countries (Continue)</h1>
  <?php

  foreach ($countries as $country) {
    if ($country == 'España'){
      continue;
    }

    echo '<li>' . $country . '</li>';
  }



   ?>
</body>
</html>
