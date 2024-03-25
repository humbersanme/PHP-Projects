<!-- Código de PHP -->
<?php
// Obtener la fecha actual
$fechaActual = date("d-m-Y H:i:s");
date_default_timezone_set('Europe/Madrid');
// Imprimir la fecha
echo "<div class='h3'>La fecha actual es: $fechaActual</div>";
// Recogemos los datos y los almacenamos en las variables 

   // Verificar si se enviaron los datos del formulario
   if (isset($_POST['enviar'])) {
    // Verificar si todas las variables están definidas y no están vacías
    if (isset($_POST['proyecto']) && isset($_POST['horas']) && isset($_POST['selCategoria'])) {
        $proyecto = $_POST['proyecto'];
        $horas = $_POST['horas'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $trabajador = $nombre . ' ' . $apellido;
        $categoria = $_POST['selCategoria'];
        $descripcion = $_POST['descripcion'];
        // Creamos un array asociativo: Conjunto de datos asociativo.
       /*  Los Array asociativos son arreglos que están compuestos por claves o índices y un valor asociado a ese índice o clave. Pg 33 18Introduccion a PHP */
        $tarifaPorCategoria = [
          "Jefe" => 50,
          "Administrativo" => 30,
          "Operario" => 25,
          "Practicas" => 15
        ];

        $pagohora = $tarifaPorCategoria[$categoria];
       
        $salarioBruto = $horas * $pagohora;
        $descuentoIrpf = $salarioBruto * 0.15;
        $bonusDesempeno = 300;
        $seguridadSocial = 150;
        $salarioNeto = $salarioBruto + $bonusDesempeno - $seguridadSocial;

        // Obtener la ruta de la imagen según la categoría
        $imagenPorCategoria = [
          "Jefe" => "jefe.jpg",
          "Administrativo" => "administrativo.jpg",
          "Operario" => "operario.jpg",
          "Practicas" => "practicas.jpg"
      ];

      $imagen = $imagenPorCategoria[$categoria];
   
      }else{
    echo "<p class='text-danger'>Por favor, complete todos los campos del formulario.</p>";
    }
  }else{
/*     echo "<p class='text-danger text-center'>Por favor, ingrese los datos en el formulario para realizar el cálculo.</p>"; */

  }
// Mostramos los resultados en una tabla

?>

