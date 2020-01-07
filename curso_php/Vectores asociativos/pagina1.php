<?php

$registro[]="20456322";       // 0
$registro[]="Martinez Pablo"; // 1
$registro[]="Colon 134";      // 2


/* En un VECTOR ASOCIATIVO solo debemos recordar un nombre clave para acceder
   a la información y no una posición dentro del mismo. Esto lo hace mucho más
   práctico a la hora de buscar información en un vector con múltiples datos. */
$registro=array('dni'=>'20456322',
                'nombre'=>'Martinez Pablo',
                'direccion'=>'Colón 134');
echo $registro['dni'] . '<br />';
echo $registro['nombre'] . '<br />';
echo $registro['direccion'];


?>
