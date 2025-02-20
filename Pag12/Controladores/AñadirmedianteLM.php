<?php
require_once '../Modelo/class_receta.php';

class AñadirmedianteLM
{
    private $modelo;

    // Constructor
    public function __construct()
    {
        $this->modelo = new Receta();
    }

    // Agregar una nueva receta
    public function agregarReceta($nombre_receta)
    {
        $this->modelo->agregarReceta($nombre_receta);
    }
}

// Verificar si se ha enviado el nombre de la receta por GET
if (isset($_GET['nombre_receta'])) {
    $nombre_receta = $_GET['nombre_receta'];
    $controlador = new AñadirmedianteLM();
    $controlador->agregarReceta($nombre_receta);
    echo "Receta agregada exitosamente.";
} else {
    echo "Por favor, proporcione el nombre de la receta.";
}
