<?php

if (!$_POST){
  header('Location: http://localhost/curso_php/Creación%20de%20archivos%20de%20texto/pagina1.php');
}

$ar=fopen("pedidos.txt","a") or       // $ar=fopen('asd.txt',"a" ó "w" ó "r")
  die("Problemas en la creacion");   // "a"= Crea el archivo, si existe añade datos al final
                                    // "b"= Crea el archivo, si existe borra el contenido.
fputs($ar,'Nombre: ');             // "r"= Abre el archivo para su lectura 
fputs($ar,$_REQUEST['nombre']);
fputs($ar,"\n");
fputs($ar,'Dirección: ');
fputs($ar,$_REQUEST['direccion']);
fputs($ar,"\n");

if (isset($_REQUEST['jamonqueso'])){
  fputs($ar,'Cantidad de Jamón y Queso: ');
  fputs($ar,$_REQUEST['cant_jyq']);
  fputs($ar,"\n");
}
if (isset($_REQUEST['napolitana'])){
  fputs($ar,'Cantidad de Napolitana: ');
  fputs($ar,$_REQUEST['cant_napo']);
  fputs($ar,"\n");
}
if (isset($_REQUEST['muzzarella'])){
  fputs($ar,'Cantidad de Muzzarella: ');
  fputs($ar,$_REQUEST['cant_muzza']);
  fputs($ar,"\n");
}

fputs($ar,"--------------------------------------------------------");
fputs($ar,"\n");
fclose($ar);
echo "Los datos se cargaron correctamente.";

?>
