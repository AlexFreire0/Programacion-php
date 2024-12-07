<?php
$num1 = readline("Ingrese el primer número: "); 
$num2 = readline("Ingrese el segundo número: ");
echo "Seleccione la operación a realizar:\n";
echo "1. Suma\n";
echo "2. Resta\n";
echo "3. Multiplicación\n";
echo "4. División\n";
$operation = readline("Ingrese el número de la operación: ");
if ($operation == 1) {
    $result = $num1 + $num2;
    echo "Resultado: $num1 + $num2 = $result\n";
} elseif ($operation == 2) {
    $result = $num1 - $num2;
    echo "Resultado: $num1 - $num2 = $result\n";
} elseif ($operation == 3) {
    $result = $num1 * $num2;
    echo "Resultado: $num1 * $num2 = $result\n";
} elseif ($operation == 4) {
    if ($num2 != 0) {
        $result = $num1 / $num2;
        echo "Resultado: $num1 / $num2 = $result\n";
    } else {
        echo "Error: No se puede dividir entre cero.\n";
    }
} else {
    echo "Operación no válida. Por favor, elija una opción del 1 al 4.\n";
}
?>
