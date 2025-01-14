<?php
class Animal {
    public $especie;
    public function emitirSonido() {
        echo "El animal ". $this->especie . " empezó a hacer sonidos";
    }
}
class Perro extends Animal {
    public $raza;
    public function emitirSonido() {
        echo "El perro de raza ". $this->raza . " empezó a ladrar";
    }
}
$Perro = new Perro;
$Perro->raza = "Dalmata";
$Perro->emitirSonido();
?>