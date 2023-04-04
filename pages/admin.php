<?php require_once '../src/functions/conexion.php' ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <title>Incidencias técnicas</title>
</head>
<body>
<div>
    <!--Barra de navegacion-->
<?php require_once '../src/utils/header.php' ?>

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
              $result = mysqli_query($conn,$sql);

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
              echo "<td> <a href='../src/functions/deladmin.php?id=".$mostrar['id']."'><input type='button' class='btn btn-danger' value='Completar'></a></td>";
              ?>
            </tr>
            <?php
              }
            ?>
  </table>
</div>
</body>
</html>