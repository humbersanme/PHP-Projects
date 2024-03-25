<?php

require_once "conexion.php";
//Verifica si el archivo ha sido incluído previamente


//Valida que el formulario se ha enviado porque se ha presionado el botón registro
if(isset($_POST['registro'])){


//Creamos las variables para almacenar los valores enviados por el formulario    
$usuario = $_POST['user_name'];
$mail = $_POST['user_mail'];
$password = $_POST['user_password'];



//Comprobamos que todos los campos están rellenos 
if(empty($usuario) || empty($mail) || empty($password)){
        echo "Todos los campos son obligatorios, por favor rellénalos.";
}else{
//Insertamos los datos en la base de datos 
    $sql = "INSERT INTO usuarios(id_user, user_name, user_mail, user_password) VALUES (NULL,'$usuario','$mail','$password') ";
    $resultado = mysqli_query($conexion, $sql);


if ($resultado){
    echo "Se insertaron los datos correctamente";
    
}else
echo "No se puede insertar la info <br>";
echo "Error: " . $sql . "<br>" . mysqli_error($conexion);


}

}



?>