<?php require_once '../src/functions/conexion.php' ?>
<?php require_once '../src/functions/ndate.php' ?>
<?php require_once '../src/functions/session_auth.php' ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <title>Historial de reportes técnicos</title>
</head>
<body>
<div>
    <!--Barra de navegacion-->
<?php require_once '../src/utils/header.php' ?>

<a href='../src/utils/his-tecnico_excel.php?name="Historial de reportes tecnicos"'><input type='button' class='btn btn-success' value='Descargar reporte'  style="margin-top : 20px"></a>

<div class="container-fluid" style="margin-top: 100px">
  <table class="table table-success table-striped">
            <tr>
              <td><strong>ID</strong></td>
              <td><strong>Nombre</strong></td>
              <td><strong>Laboratorio</strong></td>
              <td><strong>Numero de equipo</strong></td>
              <td><strong>Materia</strong></td>
              <td><strong>Incidencia</strong></td>
              <td><strong>Hora</strong></td>
              <td><strong>Fecha</strong></td>
            </tr>

            <?php
              $sql = "SELECT * from equiposh";
              $result = mysqli_query($conn,$sql);

              foreach ($result as $row) :

            ?>

            <tr>
              <td><?php echo $row['id']?></td>
              <td><?php echo $row['nombre']?></td>
              <td><?php echo $row['lab']?></td>
              <td><?php echo $row['equipo']?></td>
              <td><?php echo $row['materia']?></td>
              <td><?php echo $row['incidencia']?></td>
              <td><?php echo $row['hora']?></td>
              <td><?php echo nDate($row)?></td>
            </tr>
            <?php
              endforeach;
            ?>
  </table>
</div>
</body>
</html>