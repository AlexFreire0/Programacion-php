<?php

session_start();

// Almacena datos en la sesión
$_SESSION['usuario'] = 'Miguel';
$_SESSION['rol'] = 'admin';

echo "¡Sesión iniciada para " . $_SESSION['usuario'] . "!";
?>
