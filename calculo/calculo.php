<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Presupuestos - Autónomo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .table-container {
            margin-left: auto;
            margin-right: 0;
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <div class="row">
        <!-- Columna izquierda: Calculadora de Presupuestos -->
        <div class="col-md-6">
            <form method="POST" action="">
                <h2>Ingresa los datos para realizar el cálculo</h2>
                <h2>Cálculo de presupuestos-Autónomo</h2>
                
                <div class="mb-3">
                    <label for="nombredelproyecto" class="form-label">Nombre del proyecto</label>
                    <input type="text" name="nombredelproyecto" class="form-control" id="nombredelproyecto" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="numerodehorastrabajadas" class="form-label">Número de horas trabajadas</label>
                    <input type="text" name="numerodehorastrabajadas" class="form-control" id="numerodehorastrabajadas" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="precioporhora" class="form-label">Precio por hora</label>
                    <input type="text" name="precioporhora" class="form-control" id="precioporhora" aria-describedby="emailHelp" required>
                </div>
                <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
                <button type="submit" name="limpiar" class="btn btn-primary">Limpiar</button>
            </form>
        </div>

        <!-- Columna derecha: Tabla de Desglose -->
        <div class="col-md-6 table-container">
            <?php
            if(isset($_POST['enviar'])){
                if(isset($_POST['numerodehorastrabajadas']) && isset($_POST['precioporhora'])){
                    $numerodehorastrabajadas = $_POST['numerodehorastrabajadas'];
                    $precioporhora = $_POST['precioporhora'];

                    // Cálculos
                    $resultado = $numerodehorastrabajadas * $precioporhora;
                    $iva21 = $resultado * 0.21;
                    $descuentoIRPF = $resultado * 0.15;
                    $facturaSinIVA = $resultado;
                    $facturaConIVA_IRPF = $resultado + $iva21 - $descuentoIRPF;

                    // Mostrar resultados en euros
                    $resultado = number_format($resultado, 2, ',', '.') . ' €';
                    $iva21 = number_format($iva21, 2, ',', '.') . ' €';
                    $descuentoIRPF = number_format($descuentoIRPF, 2, ',', '.') . ' €';
                    $facturaSinIVA = number_format($facturaSinIVA, 2, ',', '.') . ' €';
                    $facturaConIVA_IRPF = number_format($facturaConIVA_IRPF, 2, ',', '.') . ' €';
                }
            }
            ?>
            <h2>Desglose</h2>
            <table class="table">  
                <tbody>
                    <tr>
                        <th scope="row">Proyecto</th>
                        <td><?= isset($_POST['nombredelproyecto']) ? $_POST['nombredelproyecto'] : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Precio por hora</th>
                        <td><?= isset($precioporhora) ? $precioporhora . ' €' : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Horas trabajadas</th>
                        <td><?= isset($numerodehorastrabajadas) ? $numerodehorastrabajadas : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Cálculo IVA 21%</th>
                        <td><?= isset($iva21) ? $iva21 : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Descuento IRPF-15%</th>
                        <td><?= isset($descuentoIRPF) ? $descuentoIRPF : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Factura sin IVA</th>
                        <td><?= isset($facturaSinIVA) ? $facturaSinIVA : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Factura + IVA - IRPF</th>
                        <td><?= isset($facturaConIVA_IRPF) ? $facturaConIVA_IRPF : '' ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>