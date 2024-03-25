<?php

//Lamamos al archivo que contiene la conexión a la bbdd

require_once 'conexion.php';

//Verificamos el formulario y comprueba que el botón login fue pulsado
if(isset($_POST['login'])){

//Obtenemos los valores de los campos del login y los almacenamos en estas variables
$usuario = $_POST['user_name'];
$password = $_POST['user_password'];


// Creamos la variable con la consulta
$sql = "SELECT * FROM usuarios WHERE user_name ='$usuario' AND user_password = '$password'";
//Ejecutamos la consulta
$resultado = mysqli_query($conexion,$sql);
// Vemos cuantas filas nos saca la consulta
$numero_registros = mysqli_num_rows($resultado);
// Condicional para saber si hay un registro con estos datos
if($numero_registros != 0){
//Inicio de sesión correcto
    echo "Hola: " . $usuario . "<br>has iniciado sesión";

}else{
    // Credenciales inválidas
    echo "Datos incorrectos, verifica tu usuario y password";

}
}
?>