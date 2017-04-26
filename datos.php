<?php
$host="us-cdbr-azure-east-c.cloudapp.net";
$usuario="b049e02b7dcb0d";
$clave="303abca4";
$Database="bdappsistencia";
//$conexion= mysqli_connect($host, $usuario, $clave, $base);
 // Connect to database.
 try {
     $conexion = new PDO( "mysql:host=$host;dbname=$Database", $useario, $clave);
     $conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 }
 catch(Exception $e){
     die(var_dump($e));
 }

?>




