<?php
    require_once './conexion.php';
    $id = $_GET['id'];

        $sql = "DELETE FROM equipos WHERE id = '".$id."'";
        mysqli_query($conn, $sql);
?>

<script>
    window.location.href='../../pages/tecnico.php';
</script>