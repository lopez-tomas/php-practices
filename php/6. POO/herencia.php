<?php

# Herencia: Pasa los Propiedades y Metodos de una Clase hacia otra. #

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
      return $this->nombre . ' tiene ' . $this->edad . ' años de edad, y es de ' . $this->country . '.';
  }
}

class Estudiante extends Persona{
  function __construct($nombre, $edad, $country, $carrera){
      parent::__construct($nombre, $edad, $country);
      $this->carrera = $carrera;
  }

}

class Trabajador extends Persona{
  function __construct($nombre, $edad, $country, $trabajo){
    parent::__construct($nombre, $edad, $country);
    $this->trabajo = $trabajo;
  }
}

$carlos = new Trabajador("Carlos Arturo", 23, "México", "Profesor");
echo $carlos->trabajo;

// class Estudiante{
//   public $nombre;
//   public $edad;
//   public $country;
//   public $carrera;
//
//   function __construct($nombre, $edad, $country, $carrera){
//       $this->nombre = $nombre;
//       $this->edad = $edad;
//       $this->country = $country;
//       $this->carrera = $carrera;
//   }
//
//   public function mostrarInformacion(){
//       return $this->nombre . ' tiene ' . $this->edad . ' años de edad, y es de ' . $this->country . '.';
//   }
// }

?>
