<html>
<head>
<title>Problema</title>
</head>
<body>

<?php
# Apertura para leer:
$ar=fopen("pedidos.txt","r") or
  die("No se pudo abrir el archivo");
while (!feof($ar))  /* Retorna TRUE si se ha llegado al final del archivo
{                      en caso contrario retorna false. Para que se impriman
                      todas las líneas del archivo se plantea una estructura
                      repetitiva que se ejecuta mientras no se llegue al final
                      de archivo (el operador lógico not en PHP es el caracter!) */

# Para leer:
  $linea=fgets($ar);          // Función "fgets()"= Lee una línea completa del archivo
  $lineasalto=nl2br($linea);  /* "$linea" contiene una línea completa del archivo
  echo $lineasalto;              de texto, incluso el salto de línea \n */
}                             // nl2br= new line to br, reemplaza el \n
fclose($ar);
?>

</body>
</html>
