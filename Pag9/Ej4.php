<?php 
class Vehiculo {
    private $marca;
    private $modelo;
    public function __construct($marca_ext, $modelo_ext)
    {
        $this->marca = $marca_ext;
        $this->modelo = $modelo_ext;
    }
    public function encender() {
        echo "El vehiculo está encendido";
    }
}

class Coche extends Vehiculo {
    public $combustible;
    public function __construct($marca_ext, $modelo_ext, $combustible_ext)
    {
        $this->combustible = $combustible_ext;
        $this->marca = $marca_ext;
        $this->modelo = $modelo_ext;
    }
    public function mostrarDetalles(){
        echo "El coche es un ". $this->marca . " " . $this->modelo. " y de tipo $this->combustible \n";
    }
    public function encender()
    {
        echo "El " . $this->marca . " " . $this->modelo . " está encendido \n";
    }
}

$miCoche = new Coche("BMW","M3","Gasolina");
$miCoche->encender();
$miCoche->mostrarDetalles();
?>