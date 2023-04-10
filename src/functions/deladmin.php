<?php
    require_once './conexion.php';
    $id = $_GET['id'];

        $sql = "DELETE FROM administrativos WHERE id = '".$id."'";
        mysqli_query($conn, $sql);
?>

<script>
    window.location.href='../../pages/admin.php';
</script>