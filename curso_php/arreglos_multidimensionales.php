<?php

$amigos = array(
  array('Alejandro', 20),
  array('César', 21),
  array('Manuel', 18)
);

echo $amigos[0][0] . '<br />';
echo $amigos[0][1] . '<br />' . '<br />';

echo $amigos[1][0] . '<br />';
echo $amigos[2][0];

# Otros arrays dentro del primero array
  $amigos_dos = array(
    array('Alejandro', 20,
      array('asd',
        array())),
    array('César', 21),
    array('Manuel', 18)
);

?>
