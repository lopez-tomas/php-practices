<?php

class Persona{
  public $nombre;
  public $edad;
  public $country;

  function __construct($nombre, $edad, $country){ // Método Constructor: Este método se va a ejecutar cada
      $this->nombre = $nombre;                    // que nosotros hagamos una instancia de la clase.
      $this->edad = $edad;
      $this->country = $country;
  }

  public function mostrarInformacion(){
      echo $this->nombre . ' tiene ' . $this->edad . ' años de edad, y es de ' . $this->country . '.';
  }
}

$carlos = new Persona("Carlos Arturo", 23, "México");
$carlos->mostrarInformacion();

echo "<br />";

$alejandro = new Persona("Alejandro", 30, "España");
$alejandro->mostrarInformacion();

?>
