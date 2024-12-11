<?php


ini_set('log_errors', 1);
ini_set('error_log', 'errores.log');


function validarEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Válido";
    } else {
        error_log("Error: Dirección de correo inválida - $email", 0);
        return "Error registrado en errores.log";
    }
}
$correo = readline("Por favor introduzca su dirección de correo: ");
echo validarEmail($correo);
?>
