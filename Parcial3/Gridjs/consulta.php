<?php
$server = "localhost";
$database = "empleadosmc";
$user = "root";
$password = "";

$con = mysqli_connect($server, $user, $password, $database) or die("Error de conexión");
$request = "select * from datos";
$register = mysqli_query($con, $request) or die("Problema en select");
$result = mysqli_fetch_all($register, MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);
?>