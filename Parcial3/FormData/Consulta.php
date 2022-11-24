<?php
$id = $_POST['Rfc'];

$servidor = "localhost";
$basedatos = "empleadosmc";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$consulta = "select * from datos where Rfc='$id'";
$registros = mysqli_query($con,$consulta) or die("Problema en select");
$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);

echo json_encode($result);   
?>  