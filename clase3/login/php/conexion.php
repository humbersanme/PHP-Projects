<?php

//Definimos los datos de acceso a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "misdatos";


$conexion = mysqli_connect($servername,$username,$password,$database);

if(!$conexion){
    die("Conexión fallida :" .mysqli_connect_error());
   }


    echo "Conexión existosa a la base de datos <br>";

?>