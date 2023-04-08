<?php
    session_start();
    
      require_once './conexion.php';
    
      $user = $_POST['user'];
      $pass = $_POST['pass'];
    
      $sql = "SELECT * FROM users WHERE user = '$user'";
      $result = mysqli_query($conn,$sql);
      $row = $result->fetch_assoc();
        
      if ($pass == $row['pass'] && $pass == $row['pass']) {
        $_SESSION['user'] = $row;
        header('Location: ../../index.php');
        exit;
      } else {
        echo'<script type="text/javascript">
            alert("Los datos no son correctos");
            window.location.href="../../login.php";
            </script>';
      }

?>