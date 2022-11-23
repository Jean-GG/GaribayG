<?php
$id = $_POST['Rfc']

$servidor = "localhost";
$basedatos = "EmpleadosMc";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$request = "select * from datos where Rfc=$id";
$register = mysqli_query($con,$request) or die("Problema en select");
$result = mysqli_fetch_all($register);

mysqli_close($con);
echo json_encode($result);
?>  