<?php
//Primero creamos las variables y le asignamos un valor.
$logueado = true;
$admin = false;
// verificar si los usuarios se loguean como admin o inivitados

if ($logueado && $admin){
    echo "Bienvenido, has iniciado sesión como administrador.";
}elseif($logueado){
    echo"Bienvenido, has iniciado sesión como invitado.";
}else {
    echo "No estás autorizado para acceder a esta área.";
}


?>