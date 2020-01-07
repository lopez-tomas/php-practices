<?php

# Cómo lo haríamos sin la POO #

// $nombre = 'Carlos';
// $edad = 23;
// $country = 'México';
//
// echo $nombre;
//
// $nombre2 = 'Alejandro';
// $edad2 = 30;
// $country2 = 'España';


class Persona{ // Una clase es una plantilla para crear objetos, que tiene variables y funciones.
  public $nombre; // Las Variables dentro de una clase se llaman Propiedades.
  public $edad;
  public $country;

  public function mostrarInformacion(){ // Las Funciones dentro de una clase se llaman Métodos.
    echo 'Hola Mundo';
  }
}

$carlos = new Persona;
$carlos->nombre = 'Carlos Arturo';
$carlos->edad = 23;
$carlos->country = 'México';

$carlos->mostrarInformacion();

// echo $carlos->nombre . ' tiene ' . $carlos->edad . ' años de edad.';

$alejandro = new Persona;
$alejandro->nombre = 'Alejandro';
$alejandro->edad = 30;
$alejandro->country = 'España';



?>
