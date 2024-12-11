<?php
function calculadora($num1, $num2, $operador) {
    try {
        switch ($operador) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                if ($num2 == 0) {
                    throw new Exception("Error: No se puede dividir entre cero.");
                }
                return $num1 / $num2;
            default:
                throw new Exception("Error: Operador no válido. Use +, -, * o /.");
        }
    } catch (Exception $e) {
        return $e->getMessage();
    }
}


$numero1 = (float)readline("Por favor introduzca el primer número: ");
$numero2 = (float)readline("Por favor introduzca el segundo número: ");
$operacion = readline("Por favor introduzca la operación a ejecutar (/, *, -, +): ");
calculadora($numero1, $numero2, $operacion);
$resultado = calculadora($numero1, $numero2, $operacion);
echo "El resultado de la operación " . $numero1 . " " . $operacion . " " . $numero2 . " es: " . $resultado;
?>