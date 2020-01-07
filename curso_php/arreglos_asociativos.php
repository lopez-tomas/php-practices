<?php

$alex = array('telefono' => '9654654', 'edad' => 25, 'apellido' => 'López', 'pais' => 'México');

echo $alex['telefono'] . '<br />';
echo $alex['edad'] . '<br />';
echo $alex['apellido'] . '<br />';
echo $alex['pais'] . '<br />' . '<br />';

$alex['telefono'] = '111111';
echo $alex['telefono'] . '<br />' . '<br />';

echo 'El teléfono de Alex es: ' . $alex['telefono'];

?>
