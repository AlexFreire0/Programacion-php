<?php
$frase = readline("Ingrese una frase: ");
$contador = 0;
$longitud = strlen($frase);
for ($i = 0; $i < $longitud; $i++) {
    if ($frase[$i] === " " && $i > 0 && $frase[$i - 1] !== " ") {
        $contador++;
    }
}
//contar la ultima tambien
if ($longitud > 0 && $frase[$longitud - 1] !== " ") {
    $contador++;
}
echo "Número total de palabras: $contador\n";
?>
