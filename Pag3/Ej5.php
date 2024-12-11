<?php
function convertirTemperatura($valor, $unidad) {
    if ($unidad != "C" && $unidad != "F") {
        $errorMsg = "Error: La unidad debe ser 'C' o 'F'. Se recibió '$unidad'.";
        error_log($errorMsg . "\n", 3, "errores.log");
        throw new Exception($errorMsg);
    }


    if ($unidad == "C") {
        return round(($valor - 32) * 5/9, 2);
    } else {
        return round(($valor * 9/5) + 32, 2);
    }
}


try {
    echo convertirTemperatura(100, "C") . "\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}


try {
    echo convertirTemperatura(0, "F") . "\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}


try {
    echo convertirTemperatura(25, "X") . "\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
?>
