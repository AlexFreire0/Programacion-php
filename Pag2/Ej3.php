<?php
echo "Ingrese una contraseña que tenga al menos los siguientes criterios:\n";
echo "- Minimo 8 caracteres\n";
echo "- Una letra mayúscula y minuscula\n";
echo "- Un número\n";
$contrasena = readline("Ingrese una contraseña: ");


if (strlen($contrasena) < 8) {
    echo "La contraseña no tiene 8 caracteres al menos.";
}   elseif (!preg_match("/[A-Z]/", $contrasena)) {
    echo "La contraseña no tiene una mayuscula al menos.";
}   elseif (!preg_match("/[a-z]/", $contrasena)) {
    echo "La contraseña no tiene una minuscula al menos.";
}   elseif (!preg_match("/[0-9]/", $contrasena)) {
    echo "La contraseña no tiene un número al menos";
}   else {
    echo "¡La contraseña es valida!";
}
?>