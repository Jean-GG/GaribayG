<?php

$servidor = "localhost";
$basedatos = "EmpleadosMc";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$consulta = "select * from Datos";
$registros = mysqli_query($con,$consulta) or die("Problemas con el select");

while($reg = mysqli_fetch_array($registros)){
    printf($reg['Nombre'].' '.$reg['Rfc'].' '.$reg['Telefono'].' '.$reg['Curp']. ' '
    .$reg['Domicilio'].' '.$reg['CodigoPostal'].' '.$reg['Puesto'].' '.$reg['EstadoCivil'].'<br>');
}
mysqli_close($con);
?>  