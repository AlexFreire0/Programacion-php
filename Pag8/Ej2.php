<?php
class Tarea {
    public $nombre;
    public $descripcion;
    public $fechaLimite;
    public $estado;

    public function __construct($nombre, $descripcion, $fechaLimite) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->fechaLimite = $fechaLimite;
        $this->estado = "pendiente";  // Estado inicial
    }

    public function marcarComoCompletada() {
        $this->estado = "completada";
    }

    public function editarDescripcion($nuevaDescripcion) {
        $this->descripcion = $nuevaDescripcion;
    }

    public function mostrarTarea() {
        echo "\nNombre: " . $this->nombre . "\nDescripción: " . $this->descripcion . "\nFecha Límite: " . $this->fechaLimite . "\nEstado: " . $this->estado . "\n";
    }
}

// Crear una lista de tareas
$tareas = [
    new Tarea("Comprar comida", "Comprar ingredientes para la cena", "2025-01-20"),
    new Tarea("Hacer ejercicio", "Ir al gimnasio a las 18:00", "2025-01-18"),
    new Tarea("Estudiar PHP", "Revisar conceptos básicos de clases y objetos", "2025-01-25")
];


// Marcar la primera tarea como completada
$tareas[0]->marcarComoCompletada();

// Editar la descripción de la segunda tarea
$tareas[1]->editarDescripcion("Ir al gimnasio para entrenar fuerza a las 19:00");

// Mostrar todas las tareas después de los cambios
foreach ($tareas as $tarea) {
    $tarea->mostrarTarea();
}