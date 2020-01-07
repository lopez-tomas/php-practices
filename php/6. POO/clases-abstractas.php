<?php

// Clases Abstractas
// Son una forma de proteger toda una clase. No se suelen utilizar mucho.
// Solo se pueden acceder a su contenido si se hereda a otra clase.

abstract class Persona{
  public function saludo(){
    return "¡Hola!";
  }
}

class Estudiante extends Persona{

}

$carlos = new Estudiante;
echo $carlos->saludo();
