<?php
// Configurar el archivo de log
$logFile = 'errores.log';

// Función personalizada para manejar errores
function manejadorErrores($errno, $errstr, $errfile, $errline) {
    global $logFile;

    // Formato del mensaje de error
    $mensaje = "[" . date("Y-m-d H:i:s") . "] ";
    $mensaje .= "Error: [{$errno}] {$errstr} en {$errfile} línea {$errline}\n";

    // Guardar el mensaje en el archivo de log
    error_log($mensaje, 3, $logFile);

    // Mostrar mensaje en la pantalla (opcional, para depuración)
    echo "Se ha registrado un error. Por favor, revise el archivo de log.\n";

    // Opcional: detener la ejecución en caso de error crítico
    if (in_array($errno, [E_ERROR, E_USER_ERROR, E_CORE_ERROR, E_COMPILE_ERROR])) {
        exit(1);
    }
}

// Establecer el manejador de errores personalizado
set_error_handler("manejadorErrores");

// Forzar algunos errores para probar
echo $undefinedVariable; // Nota: Esta línea genera un Notice
strpos(); // Nota: Esta línea genera un Warning

// Restaurar el manejador de errores predeterminado si es necesario
// restore_error_handler();
?>
