<?php
    $con = mysqli_connect('localhost', 'root', '', 'incidenciastest');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Incidencias técnicas</title>
</head>
<body class="container-fluid" style="background-color: whitesmoke">
<div>
    <!--Barra de navegacion-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Home</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="equipo.php" tabindex="-1" aria-disabled="true">Fallas técincas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Reportes administrativos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
<div class="container-fluid" style="margin-top: 100px">
  <table class="table table-success table-striped">
            <tr>
              <td><strong>ID</strong></td>
              <td><strong>Nombre</strong></td>
              <td><strong>Laboratorio</strong></td>
              <td><strong>Materia</strong></td>
              <td><strong>Incidencia</strong></td>
              <td><strong>Hora</strong></td>
              <td><strong>Fecha</strong></td>
            </tr>

            <?php
              $sql = "SELECT * from administrativos";
              $result = mysqli_query($con,$sql);

              while($mostrar = mysqli_fetch_array($result)){

            ?>

            <tr>
              <td><?php echo $mostrar['id']?></td>
              <td><?php echo $mostrar['nombre']?></td>
              <td><?php echo $mostrar['lab']?></td>
              <td><?php echo $mostrar['materia']?></td>
              <td><?php echo $mostrar['incidencia']?></td>
              <td><?php echo $mostrar['hora']?></td>
              <td><?php echo $mostrar['fechas']?></td>
              <?php 
              echo "<td> <a href='deladmin.php?id=".$mostrar['id']."'><input type='button' class='btn btn-danger' value='Completar'></a></td>";
              ?>
            </tr>
            <?php
              }
            ?>
  </table>
</div>
</body>
</html>