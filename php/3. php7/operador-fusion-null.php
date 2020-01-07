<?php

// $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anónimo';

# Es lo mismo #
// if (isset($_GET['nombre'])){
//   $nombre =  $_GET['nombre'];
// } else{
//   $nombre = 'Anonimo';
// }

$nombre = $_GET['nombre'] ?? 'Anónimo';

echo $nombre;
