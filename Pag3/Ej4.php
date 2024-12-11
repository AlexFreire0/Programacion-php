<?php


function tablaMultiplicar($numero) {


    if (!is_int($numero) || $numero <= 0) {
        throw new Exception("El número debe ser un entero positivo.");
    }


    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "\n";
    }
}




try {
    tablaMultiplicar(5);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}


try {
    tablaMultiplicar(-2);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>


