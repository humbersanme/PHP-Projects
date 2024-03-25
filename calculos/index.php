<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center m-3">Calculadora de sueldos</h1>
      <div class="row">
        <div class="col-md-6 p-3 m-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
        <form class="g-3" method="POST" action="index.php"> 
            <h2 class="text-center container-fluid">Cálculo de sueldo</h2>
            <div class="col-md-12 mb-3">
                <label for="proyecto" class="form-label">Proyecto</label>
                <input type="text" name="proyecto" class="form-control" id="proyecto" required>
            </div>
            <div class="col-md-12 mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <textarea name="descripcion" class="form-control" id="descripcion" required></textarea>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                  <label for="nombre" class="form-label">Nombre trabajador</label>
                  <input type="text" name="nombre" class="form-control" id="nombre" required>
              </div>
              <div class="col-md-6 mb-3">
                  <label for="apellido" class="form-label">Apellido trabajador</label>
                  <input type="text" name="apellido" class="form-control" id="apellido" required>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="horas" class="form-label">Horas trabajadas</label>
                <input type="number" name="horas" class="form-control" id="horas" required>
            </div>
            <div class="col-md-6 mb-3">
            <label for="selCategoria" class="form-label">Trabajador</label>
            <select class="form-select" name="selCategoria">
                <option selected value="Jefe">Jefe</option>
                <option value="Administrativo">Administrativo</option>
                <option value="Operario">Operario</option>
                <option value="Practicas">Prácticas</option>
            </select>
            </div>
            </div>
            <div class="col-12 mb-3">
                <input type="submit" name="enviar" value="enviar" class="btn btn-primary p-3">
                <input type="reset" value="limpiar" class="btn btn-primary p-3">
            </div>
        </form>
    </div>

    <div class="col">
    <?php
    include "desglose.php";
    ?>
     <div class="container" class="m-3"> 
          <div class="card" style="">
            <img src="<?= isset($imagen) ? $imagen : 'operario.jpg' ?>"  class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"><?= isset($proyecto) ? $proyecto : 'Introduce un nombre de proyecto' ?></h5>
              <p class="card-text"><?= isset($descripcion) ? $descripcion : '' ?></p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Trabajador:</b> <?= isset($trabajador) ? $trabajador : '' ?></li>
              <li class="list-group-item"><b>Categoría:</b> <?= isset($categoria) ? $categoria : '' ?></li>
              <li class="list-group-item"><b>Horas trabajadas:</b> <?= isset($horas) ? $horas : '' ?></li>
            </ul>
            <div class="card-body">   
              <li class="list-group-item"><b>Bonus desempeño:</b> <?= isset($bonusDesempeno) ? ' ' . $bonusDesempeno . ' €' : '' ?></li>
              <li class="list-group-item"><b>Seguridad social:</b> <?= isset($seguridadSocial) ? ' ' . $seguridadSocial . ' €' : '' ?></li>
              <li class="list-group-item"><b>Salario Bruto:</b> <?= isset($salarioBruto) ? ' ' . $salarioBruto . ' €' : '' ?></li>
              <li class="list-group-item"><b>Salario Neto:</b> <?= isset($salarioNeto) ? ' ' . $salarioNeto . ' €' : '' ?></li>
            </div>
          </div>
  </div>
</div>

<script>
    history.replaceState(null, null, location.pathname);
</script>


<!-- history.replaceState(null, null, location.pathname); es una línea de código en JavaScript que utiliza la API del historial del navegador para modificar la URL del navegador sin recargar la página. Aquí hay una explicación sintética de cada parte:
history.replaceState: Este método es parte de la API del historial de navegación en JavaScript. Permite modificar el historial del navegador sin realizar una nueva entrada en el historial.
null, null: Los dos primeros argumentos son para el estado y el título del nuevo estado del historial. En este caso, se establecen como null, lo que significa que no hay un nuevo estado asociado y no se cambia el título de la página.
location.pathname: El tercer argumento es la nueva URL. location.pathname proporciona la parte de la URL que representa la ruta del recurso actual. En este contexto, se está utilizando para reemplazar la URL actual con la misma URL, efectivamente recargando la página sin cambiar la URL visible. -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>