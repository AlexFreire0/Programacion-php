<?php 
class Persona {
    public $nombre;
    public $edad;
    public $genero;
    public function presentar() {
        echo "Hola, mi nombre es ". $this->nombre. " y tengo " . $this->edad . " años y me identifico como " . $this->genero;    
    }
}
$mipersona = new Persona;
$mipersona->nombre = "Alex";
$mipersona->edad = 18;
$mipersona->genero = "Doble elefante telepata de guerra";
$mipersona->presentar();
?>