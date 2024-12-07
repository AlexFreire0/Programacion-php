<?php
// Array de nombres y apellidos
$nombres = ["Juan", "María", "Carlos", "Ana", "Pedro", "Luisa", "Luis", "Sara", "José", "Elena"];
$apellidos = ["González", "Pérez", "Rodríguez", "López", "Sánchez", "Martínez", "Gómez", "Fernández", "Díaz", "Jiménez"];

$NombreNumero = rand(0, count($nombres) - 1);
$ApellidoNumero = rand(0, count($apellidos) - 1);

$nombreAleatorio = $nombres[$NombreNumero] . " " . $apellidos[$ApellidoNumero];

echo "Nombre aleatorio: " . $nombreAleatorio . "\n";
?>
