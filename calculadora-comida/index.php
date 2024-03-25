<?php
// Definir las variables antes de verificar si se envió el formulario
$ventasMenu1 = 0;
$ventasMenu2 = 0;
$ventasMenu3 = 0;
$ventasMenu4 = 0;
$ventasTotales = 0;
$iva = 0;
$totalConIVA = 0;
$propinas = 0;
$parteEmpresario = 0;
$parteCamarero = 0;
$totalFinal = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enviar'])) {
    // Obtener los valores de los campos del formulario
    $menu1 = isset($_POST['menu1']) ? floatval($_POST['menu1']) : 0;
    $menu2 = isset($_POST['menu2']) ? floatval($_POST['menu2']) : 0;
    $menu3 = isset($_POST['menu3']) ? floatval($_POST['menu3']) : 0;
    $menu4 = isset($_POST['menu4']) ? floatval($_POST['menu4']) : 0;
    $propinas = isset($_POST['propinas']) ? floatval($_POST['propinas']) : 0;
    $camareros = isset($_POST['camareros']) ? intval($_POST['camareros']) : 0;

    // Precios de los menús
    $precioMenu1 = 9.99;
    $precioMenu2 = 12.90;
    $precioMenu3 = 14.50;
    $precioMenu4 = 20.20;

    // Calcular las ventas totales
    $ventasMenu1 = $menu1 * $precioMenu1;
    $ventasMenu2 = $menu2 * $precioMenu2;
    $ventasMenu3 = $menu3 * $precioMenu3;
    $ventasMenu4 = $menu4 * $precioMenu4;

    $ventasTotales = $ventasMenu1 + $ventasMenu2 + $ventasMenu3 + $ventasMenu4;

    // Calcular otros valores
    $ivaPorcentaje = 21;
    $subtotal = $ventasTotales;
    $iva = $subtotal * ($ivaPorcentaje / 100);
    $totalConIVA = $subtotal + $iva;

    $parteEmpresario = $totalConIVA * 0.5;
    $parteCamarero = ($totalConIVA - $propinas) / $camareros;
    $totalFinal = $totalConIVA + $propinas;
}
?>


<!DOCTYPE html>
<html lang="ees">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-image: url(img/podval.png);

        }
    .dot {
        display: inline-block;
        width: 8px;
        height: 8px;
        background-color: #333;
        border-radius: 30%;
        margin-right: 8px;

    }
    </style>
</head>

<body>
    <h2 class="text-center p-3"> Calculadora ganancias diarias</h2>

    <!-- ------------------------------------------- -->

    <div class="container">
        <div class="row">
            <div class="col bg-secondary p-3" style="border-radius: 10px;">
                <!-- Contenido de la primera columna -->
                <form method="POST" class="text-black">
                    <div class="row mt-3 mb-3">

                        <div class="mb-3 col-6 d-flex flex-column align-items-center">
                            <label for="menu1" class="form-label mb-2">Menu 1 (€9,99)</label>
                            <img src="img/cena.jpeg" class="img-thumbnail" alt="">
                            <input type="number" name="menu1" class="form-control mt-3" id="menu1">
                        </div>
                        <div class="mb-3 col-6 mx-auto d-flex flex-column align-items-center">
                            <label for="menu2" class="form-label mb-2">Menu 2 (€12,90)</label>
                            <img src="img/nachos.jpeg" class="img-thumbnail" alt="">
                            <input type="number" name="menu2" class="form-control mt-3" id="menu2">
                        </div>
                        <div class="mb-3 col-6 mx-auto d-flex flex-column align-items-center">
                            <label for="menu3" class="form-label mb-2">Menu 3 (€14,50)</label>
                            <img src="img/poca.jpeg" class="img-thumbnail" alt="">
                            <input type="number" name="menu3" class="form-control mt-3" id="menu3">
                        </div>
                        <div class="mb-3 col-6 mx-auto d-flex flex-column align-items-center">
                            <label for="menu4" class="form-label mb-2">Menu 4 (€20,20)</label>
                            <img src="img/quesa.jpeg" class="img-thumbnail" alt="">
                            <input type="number" name="menu4" class="form-control mt-3" id="menu4">
                        </div>
                        <div class="mb-3 col-6 mx-auto d-flex flex-column align-items-center">
                            <label for="propinas" class="form-label mb-2">Propinas del día</label>
                            <img src="img/propina.jpeg" class="img-thumbnail" alt="">
                            <input type="number" name="propinas" class="form-control mt-3" id="propinas">
                        </div>
                        <div class="mb-3 col-6 mx-auto d-flex flex-column align-items-center">
                            <label for="camareros" class="form-label mb-2">Nº de camareros</label>
                            <img src="img/equipo.webp" class="img-thumbnail" alt="">
                            <input type="number" name="camareros" class="form-control mt-3" id="camareros">
                        </div>

                    </div>
                    <button type="submit" name="enviar" class="btn btn-primary mb-3">Calcular</button>

                </form>
            </div>
            <div class="col-md-6 bg-secondary p-3" style="border-radius: 10px;">
                <p class="text-center mt-2"> Ventas diarias</p>
                <!-- Contenido de la segunda columna -->
                <div class="card mb-3" style="">
                    <img src="img/restaugiro.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body mb-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-action"><span class="dot"></span><strong>Ventas
                                    menu 1:</strong>
                                <?php echo number_format($ventasMenu1, 2); ?> €
                            </li>
                            <li class="list-group-item list-group-item-action"><span class="dot"></span><strong>Ventas
                                    menu 2:</strong>
                                <?php echo number_format($ventasMenu2, 2); ?> €
                            </li>
                            <li class="list-group-item list-group-item-action"><span class="dot"></span><strong>Ventas
                                    menu 3:</strong>
                                <?php echo number_format($ventasMenu3, 2); ?> €
                            </li>
                            <li class="list-group-item list-group-item-action"><span class="dot"></span><strong>Ventas
                                    menu 4:</strong>
                                <?php echo number_format($ventasMenu4, 2); ?> €
                            </li>
                        </ul>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Ventas Totales:</strong>
                            <?php echo number_format($ventasTotales, 2); ?> €
                        </li>
                        <li class="list-group-item"><strong>IVA (10%):</strong>
                            <?php echo number_format($iva, 2); ?> €
                        </li>
                        <li class="list-group-item"><strong>Total con IVA:</strong>
                            <?php echo number_format($totalConIVA, 2); ?> €
                        </li>
                        <li class="list-group-item"><strong>Propinas del día:</strong>
                            <?php echo number_format($propinas, 2); ?> €
                        </li>
                        <li class="list-group-item"><strong>Parte para el empresario (50%):</strong>
                            <?php echo number_format($parteEmpresario, 2); ?> €
                        </li>
                        <li class="list-group-item"><strong>Parte para cada camarero:</strong>
                            <?php echo number_format($parteCamarero, 2); ?> €
                        </li>
                        <li class="list-group-item"><strong>Total Final:</strong>
                            <?php echo number_format($totalFinal, 2); ?> €
                        </li>
                    </ul>
                </div>
            </div>






            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous">
            </script>
</body>