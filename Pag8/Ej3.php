<?php
class Empleado {
    public $nombre;
    public $sueldo;
    public $aniosExperiencia;
    public function calcularBonus() {
        $paresDeAnios = floor($this->aniosExperiencia / 2);
        $bonus = $paresDeAnios * 0.05 * $this->sueldo;
        return $bonus; 
    }
    public function mostrarDettales() {
        echo "El empleado ". $this->nombre . " gana " . $this->sueldo . "€/al mes con un bonus de: " . $this->calcularBonus(). "€\n";
        
    }
}
class Consultor extends Empleado {
    public $horasPorProyecto;
    public function calcularBonus() {
        $bonus = parent::calcularBonus(); 
        if ($this->horasPorProyecto > 100) {
            $bonus += 0.05 * $this->sueldo;

        }
        return $bonus;
    }
}
$Empleado1 = new Empleado;
$Empleado1->nombre = "Agustin";
$Empleado1->sueldo = 5080;
$Empleado1->aniosExperiencia = 2;
$Empleado2 = new Consultor;
$Empleado2->nombre = "Alex";
$Empleado2->sueldo = 5080;
$Empleado2->horasPorProyecto = 150;
$Empleado2->aniosExperiencia = 2;
$Empleado1->mostrarDettales();
$Empleado2->mostrarDettales();
?>