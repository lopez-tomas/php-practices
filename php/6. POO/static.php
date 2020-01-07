<?php

// Static
// Nos permite poder acceder a propiedades y métodos sin tener que instansearlos (ej, $carlos = new Persona;)

class Persona{
  public static $dia = '7 de septiembre';

  public static function saludo($nombre = null){
    if($nombre){
      return "¡Hola, buen día " . $nombre . '!';
    } else{
      return '¡Hola, buen día!';
    }
  }
}

$carlos = new Persona;
echo $carlos->saludo('Carlos');

// Método STATIC
echo Persona::saludo('Carlos');
