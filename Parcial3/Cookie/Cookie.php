<?php
//setcookie(Nombre,valor,expira)
$fechaHoy = date('Y/m/d H:i:s');
$siguienteSemana = time() + (7 * 24 * 60 * 60);
$fechaExpira = date('Ym/d H:i:s', $siguienteSemana), "<br>"; 
echo '<b>Fecha de Creacion de Cookie' </b>

setcookie("ultimaVisita", $fechaHoy,time() + (7 * 24 * 60 * 60));
?>