<?php
class Empleado {
    public $nombre;
    public $sueldo;
    public function mostrarDettales() {
        echo "El empleado ". $this->nombre . "gana " . $this->sueldo . "€/al mes";
    }
}
class Gerente extends Empleado {
    public $departamento;
    public function mostrarDettales()
    {
        echo "El empleado ". $this->nombre . " del departamento del ". $this->departamento . " gana " . $this->sueldo . "€/al mes";
    }
}
$Empleado1 = new Gerente;
$Empleado1->nombre = "Agustin";
$Empleado1->sueldo = 5080;
$Empleado1->departamento = "Circo";
$Empleado1->mostrarDettales();
?>