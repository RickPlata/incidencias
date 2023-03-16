<?php
    $con = mysqli_connect('localhost', 'root', '', 'incidenciastest');
    $id = $_GET['id'];

        $sql = "DELETE FROM equipos WHERE id = '".$id."'";
        mysqli_query($con, $sql);
?>

<script>
    window.location.href='equipo.php';
</script>