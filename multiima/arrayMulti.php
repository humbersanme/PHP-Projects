<?php
$todosLosConsejos = [
    1 => [
        "consejo" => "La mayor declaración de amor es lo que no se hace; el hombre que siente mucho, habla poco.",
        "imagen" => "imagenes/aristoteles.jpg",
        "autor" => "Aristóteles"
    ],
    2 => [
        "consejo" => "La constancia es básica para alcanzar tus objetivos.",
        "imagen" => "imagenes/uzkiglaca.jpg",
        "autor" => "Platón"
    ],
    3 => [
        "consejo" => "La constancia es básica para alcanzar tus objetivos.",
        "imagen" => "imagenes/escuela.jpg",
        "autor" => "Pitágoras"
    ],
    4 => [
        "consejo" => "Si no esperas lo inesperado no lo reconocerás cuando llegue.",
        "imagen" => "imagenes/heraclito.jpg",
        "autor" => "Heráclito"
    ],
];

// Función para obtener el consejo aleatorio
function obtenerConsejoAleatorio($arrayConsejos)
{
    // Genera un índice aleatorio dentro del rango de los índices del array de citas
    $indiceAleatorio = array_rand($arrayConsejos);
    // Accedemos al array del consejo asociado al índice aleatorio.
    $consejoAleatorio = $arrayConsejos[$indiceAleatorio];
    // La información del consejo seleccionado aleatoriamente se almacena en la variable $consejoAleatorio
    return $consejoAleatorio;
}

// Inicializar $consejoAleatorio para evitar errores
$consejoAleatorio = obtenerConsejoAleatorio($todosLosConsejos);

// Verificar si se ha enviado el formulario para obtener un nuevo consejo
if (isset($_POST['obtenerConsejo'])) {
    $consejoAleatorio = obtenerConsejoAleatorio($todosLosConsejos);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consejo del Día</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url('imagenes/acrolis.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        /* Estilo para la sombra tridimensional */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
        }

        .rounded-img {
            border-radius: 15px;
            width: 100%;
            height: auto;
        }

        .rounded-container {
            border-radius: 15px;
        }
    </style>
</head>

<body class="text-center">
    <div class="container" style="width: 40%;">
        <div class="card mx-auto rounded-container">
            <img src="<?= $consejoAleatorio['imagen'] ?>" class="card-img-top rounded-img" alt="Consejo Imagen">
            <div class="card-body">
                <h5 class="card-title"><?= $consejoAleatorio['autor'] ?></h5>
                <p class="card-text"><?= $consejoAleatorio['consejo'] ?></p>
                <form action="" method="post">
                    <button type="submit" name="obtenerConsejo" class="btn btn-warning">Click para obtener consejo</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>