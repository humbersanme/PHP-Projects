<?php
// ... (tu código PHP existente)

if (isset($_POST['consejo'])) {
    $cositasAleatorio = obtenerConsejoAleatorio($cositas);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galleta de la fortuna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-image: url('astro.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .rounded-img {
            border-radius: 15px; /* Puedes ajustar el valor según tus preferencias */
            width: 100%; /* Hace que la imagen ocupe el 100% del contenedor */
            height: auto; /* Mantiene la proporción de la imagen */
        }

        .rounded-container {
            border-radius: 15px; /* Puedes ajustar el valor según tus preferencias */
            height: 100%; /* Ajusta la altura del contenedor */
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Columna 1 -->
            <div class="col-md-6">
                <div class="container bg-info p-3 rounded-container">
                    <h1>Galleta de la fortuna</h1>
                    <form action="" method="post">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-warning" name="consejo">Obtener consejo</button>
                        </div>
                    </form>
                    <p><?= isset($cositasAleatorio) ? $cositasAleatorio : 'Click en el botón para obtener un consejo' ?></p>
                    <!-- Agregar la imagen con bordes redondeados -->
                    <img src="tatsia.jpg" alt="Imagen Tatsia" class="rounded-img">
                </div>
            </div>

            <!-- Columna 2 -->
            <div class="col-md-6">
                <div class="container bg-info p-3 rounded-container">
                    <h1>Número de la suerte</h1>
                    <form action="" method="post">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-danger" name="consejo">Obtener el número</button>
                        </div>
                    </form>
                    <p><?= isset($numeroAleatorio) ? $numeroAleatorio : 'Click en el botón para obtener un número' ?></p>
                    <!-- Agregar la imagen con bordes redondeados -->
                    <img src="numerologia.jpg" alt="Imagen numerologia" class="rounded-img">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>