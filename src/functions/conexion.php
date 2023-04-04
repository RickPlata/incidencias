<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "incidenciastest";

// Se crea la conexión
$conn = mysqli_connect($host, $user, $password, $dbname);

// Se verifica conexión
if (!$conn) {
  die("Error en la conexión: " . mysqli_connect_error());
}
?>