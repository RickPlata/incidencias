<?php 
    require_once '../functions/excel.php';
    require_once '../functions/conexion.php';
    require_once '../functions/ndate.php';
?>
 <head>
    <meta charset="UTF-8">
 </head>

<h1>Historial de reportes tecnicos</h1>

<table>
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