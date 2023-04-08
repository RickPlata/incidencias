<?php
session_start();

    if (empty($_SESSION['user'])) {
      header('Location: ./login.php');
      exit();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Sistema de incidencias</title>
</head>
<body>
    <header>
        <div class="container-fluid text-center" id="header">
            <div class="row">
              <div class="col">
                <img src="./img/esime_original.png" class="img-thumbnail" id="logo" alt="ESIMEZ-ICE">
              </div>
              <div class="col">
                <h1 style="color: white">Sistema de incidencias de laboratorios de computación ESIMEZ-ICE</h1>
              </div>
              <div class="col">
                <img src="./img/LOGOTIPO_IPN.png" class="img-thumbnail" id="logo" alt="IPN">
              </div>
            </div>
          </div>
        
        
        <ul class="nav justify-content-center" id="navar">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/about.php">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/his-tecnico.php">Historial de reportes técnicos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/his-admin.php">Historial de reportes administrativos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/tecnico.php">Lista de reportes tecnicos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/admin.php">Lista de reportes administrativos</a>
            </li>
            <a href='./src/functions/logout.php'><input type='button' class='btn btn-danger' value='Cerrar sesion'></a>
          </ul>
    </header>

    <section id="maincard">

      <div class="container text-center">
        <div class="row">
          <div class="col">
            
            <div class="card" id="card" style="width: 18rem;">
              <img src="./img/herramientas.png" id="ico" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Reportes técnicos</h5>
                <p class="card-text">Haz clic aquí para ir a la lista de reportes tecnicos</p>
                <a href="./pages/tecnico.php" class="btn btn-primary">Acceder</a>
              </div>
            </div>

          </div>
          <div class="col">
            
            <div class="card" id="card" style="width: 18rem;">
              <img src="./img/lista-de-verificacion.png" id="ico" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Reportes administrativos</h5>
                <p class="card-text">Haz clic aquí para ir a la lista de reportes administrativos</p>
                <a href="./pages/admin.php" class="btn btn-primary">Acceder</a>
              </div>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col">
            
            <div class="card" id="card" style="width: 18rem;">
              <img src="./img/historical.png" id="ico" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Historial de Reportes técnicos</h5>
                <p class="card-text">Haz clic aquí para ir al historial de reportes tecnicos</p>
                <a href="./pages/his-tecnico.php" class="btn btn-primary">Acceder</a>
              </div>
            </div>

          </div>
          <div class="col">
            
            <div class="card" id="card" style="width: 18rem;">
              <img src="./img/version-control.png" id="ico" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Historial de Reportes administrativos</h5>
                <p class="card-text">Haz clic aquí para ir al historial de reportes tecnicos</p>
                <a href="./pages/his-admin.php" class="btn btn-primary">Acceder</a>
              </div>
            </div>

          </div>
      </div>
        
    </section>
    <footer>
    
      <nav class="navbar bg-body-tertiary fixed-bottom">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./img/robotico.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Sistema de incidencias de laboratorios
          </a>
        </div>
      </nav>

    </footer>
</body>
</html>