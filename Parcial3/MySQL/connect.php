<?php

$servidor = "localhost";
$basedatos = "EmpleadosMc";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$consulta = "select * from Datos";
$registros = mysqli_query($con,$consulta) or die("Problemas con el select");

while($reg = mysqli_fetch_array($registros)){
    printf($reg['nombre'].''.$reg['apPaterno'].'<br>');
}
mysqli_close($con);
?>