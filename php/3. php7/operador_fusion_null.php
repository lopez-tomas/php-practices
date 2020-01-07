<?php

// $name = isset($_GET['name']) ? $_GET['name'] : 'Anonymous';

$nombre = $_GET['name'] ?? 'Anonymous';

echo $nombre;

?>
