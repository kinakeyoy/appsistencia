<?php
//$host="sqlsrv:server = tcp:serverbdappsistencia.database.windows.net,1433";
//$usuario="userbdasistencia";
//$clave="Sismad2017";
//$Database="BDAppsistencia";
//$conexion= mysqli_connect($host, $usuario, $clave, $base);
try {
    $conexion = new PDO("sqlsrv:server = tcp:serverbdappsistencia.database.windows.net,1433; Database = BDAppsistencia", "userbdasistencia", "{your_password_here}");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>




