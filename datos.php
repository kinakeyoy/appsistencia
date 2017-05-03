<?php
//Variable de conexion
$host="localhost";
$usuario="sismad";
$clave="sismad2017";
$Database="asistencia";
$conexion= mysqli_connect($host,$usuario,$clave)or die ("No se pudo conectar: ");
mysqli_select_db($conexion,$Database)or die ("No se pudo conectar: ");
//prueba para que tenshi vea como edito desde sublime y se refeja en git

?>




