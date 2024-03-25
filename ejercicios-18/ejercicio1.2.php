<?php
// $logueando = false;
$permiso_escritura = true; 
$perimiso_lectura = false; 
if ($permiso_lectura || $permiso_escritura){ 

    if ($permiso_escritura && $permiso_lectura){
        echo "Puedes leer y escribir";

    }else{
        if($permiso_escritura){
            echo "Puedes escribir";
        } else {
            echo "Puedes leer";  
        }
    }
    
    } else {
        echo " No tienes permisos para acceder al contenido.";
    }

?>