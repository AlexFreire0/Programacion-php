<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Receta</title>
</head>
<body>
    <h1>Alta de Receta</h1>
    <form action="../Controladores/Add_MedianteLM.php" method="get">
        <label for="nombre_receta">Nombre de la Receta:</label>
        <input type="text" id="nombre_receta" name="nombre_receta" required>
        <br><br>
        <input type="submit" value="Agregar Receta">
    </form>
</body>
</html>
