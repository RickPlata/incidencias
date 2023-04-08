<?php 
$name = $_GET['name'];
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename = $name.xls"); 
?>