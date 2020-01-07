<?php

class Persona{
  public $nombre;
  public $edad;
  public $country;

  public function mostrarInformacion(){
      echo $this->nombre . ' tiene ' . $this->edad . ' años de edad, y es de ' . $this->country . '.';
  }
}

$carlos = new Persona;
$carlos->nombre = "Carlos Arturo";
$carlos->edad = 23;
$carlos->country = "México";
$carlos->mostrarInformacion();

echo "<br />";

$alejandro = new Persona;
$alejandro->nombre = "Alejandro";
$alejandro->edad = 30;
$alejandro->country = "España";
$alejandro->mostrarInformacion();

?>
