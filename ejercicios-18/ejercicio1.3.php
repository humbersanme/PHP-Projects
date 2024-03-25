


<?php

// Edad del usuario
$edadUsuario = 25;

// Límites de edad establecidos
$edadMinima = 18;
$edadMaxima = 60;

// Verificar si la edad está dentro del rango
if ($edadUsuario >= $edadMinima && $edadUsuario <= $edadMaxima) {
    echo "Este contenido es apto para tu edad";
} else {
    echo "Lo sentimos, este contenido no es apto para tu edad";
}

?>