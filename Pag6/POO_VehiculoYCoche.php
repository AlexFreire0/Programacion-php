<?php 
class Vehiculo {
    public $marca;
    public function encender() {
        echo "El " . $this->marca . " está encendido";
    }
}

class Coche extends Vehiculo {
    public $modelo;
    public function encender()
    {
        echo "El " . $this->marca . " " . $this->modelo . " está encendido";
    }
}

$miCoche = new Coche;
$miCoche->marca = "BMW";
$miCoche->modelo = "M3";
$miCoche->encender();
?>
