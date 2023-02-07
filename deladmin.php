<?php
    $con = mysqli_connect('localhost', 'root', '', 'incidenciastest');
    $id = $_GET['id'];

        $sql = "DELETE FROM administrativos WHERE id = '".$id."'";
        mysqli_query($con, $sql);
?>

<script>
    window.location.href='admin.php';
</script>