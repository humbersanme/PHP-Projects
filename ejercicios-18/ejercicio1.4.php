<?php
// Declara una variable para almacenar el nombre de usuario y asígnale un valor
$nombreUsuario = "usuario123";

// Utiliza la instrucción if para verificar si el nombre de usuario es igual al valor específico
if ($nombreUsuario == "valorEspecifico") {
    // Si la condición es verdadera, imprime un mensaje de bienvenida
    echo "<p>Bienvenido, $nombreUsuario</p>";
} else {
    // Si la condición es falsa, imprime un mensaje de error
    echo "<p>Error: Nombre de usuario incorrecto</p>";
}
?>