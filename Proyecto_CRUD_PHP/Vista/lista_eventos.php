<?php
require_once '../controlador/EventosController.php';
$controller = new EventoController();
$eventos = $controller->listarEventos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Socios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Eventos Registrados</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID_Evento</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Lugar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($socios as $socio): ?>
                    <tr>
                        <td><?= htmlspecialchars($socio['id_evento']) ?></td>
                        <td><?= htmlspecialchars($socio['nombre_evento']) ?></td>
                        <td><?= htmlspecialchars($socio['fecha']) ?></td>
                        <td><?= htmlspecialchars($socio['lugar']) ?></td>
                        <td>
                            <a href="editar_evento.php?id=<?= urlencode($socio['id_evento']) ?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="eliminar_socio.php?id=<?= urlencode($socio['id_evento']) ?>" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="alta_evento.php" class="btn btn-primary">Agregar un nuevo evento</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

