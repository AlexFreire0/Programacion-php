<?php
require_once '../config/db_config.php';
require_once '../ia/consultas.php';

class Receta {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    // Agregar una nueva tarea y asignarla a un usuario
    public function agregarReceta($nombre_receta) {
        $consulta = new consulta();
        $ingredientes = $consulta->devolver_ingredientes($nombre_receta);
        $instrucciones = $consulta->devolver_instrucciones($nombre_receta);
        $sql = "INSERT INTO recetas (titulo, ingredientes, instrucciones) VALUES ('$nombre_receta', '$ingredientes', '$instrucciones')";
        $this->conexion->conexion->query($sql);
    }
}
?>