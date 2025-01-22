<?php
class Empleado {
    public $nombre;
    public $sueldo;
    public $puesto;
    public function __construct($nombre_ext, $sueldo_ext, $puesto_ext)
    {
        $this->nombre = $nombre_ext;
        $this->sueldo = $sueldo_ext;
        $this->puesto = $puesto_ext;
    }
    public function setSueldo($nuevoSueldo) {
        $this->sueldo = $nuevoSueldo;
    }
    public function getSueldo() {
        return $this->sueldo;
    }
}
class Manager extends Empleado {
    public $departamento;
    public function revisarEmpleado(Empleado $empleado) {
        echo "Nombre: ". $empleado->nombre . " || Puesto: ". $empleado->puesto . "\n";
    }
}

$empleado1 = new Empleado("Luis García", 2500, "Guía Turístico");
$empleado2 = new Empleado("Ana López", 3000, "Coordinadora");
$manager = new Manager("Carlos Pérez", 5000, "Manager General", "Operaciones");
$empleado1->setSueldo(2700);
echo "Sueldo de " . $empleado1->nombre . ": " . $empleado1->getSueldo() . "\n";
$manager->revisarEmpleado($empleado1);
$manager->revisarEmpleado($empleado2);

?>

?>