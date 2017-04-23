<?php
// incluimos lo datos de conexion y las funciones
include("datos.php");

	//$rol=$_POST["rol"];
	$rol=$_POST['frol'];
	$nombre=$_POST["fnombre"];
	$apellido=$_POST["fapellido"];
	$correo=$_POST["femail"];
	$ntelefono=$_POST["ftelefono"];
	$cod=$_POST["fcodigo"];
	$pass1=$_POST["fpass1"];
	$pass2=$_POST["fpass2"];	
	session_start();



if ($pass1==$pass2)
{
	$consulta="INSERT INTO usuario (codigo	,nombre,apellido,email,telefono) VALUES ('$cod','$nombre' ,'$apellido' ,'$correo' ,'$ntelefono')";	
	if (mysqli_query($conexion, $consulta)) {
    	header('Location: Pag_Usuario_Guardado.html ');
		} 
		else
		{
			echo "dato no guardado"."<br>".mysqli_error($conexion);
		}
}
else
{
header('Location: Pag_Usuario_No_Guardado.html ');
}




//$sql = "SELECT codigo_login,pass_login, id_login FROM login where codigo_login='".$usuario."' and pass_login='".$pass."' and id_login=".$select;
//$result = mysqli_query($conexion, $sql);
//$array=mysql_query(SELECT id_login FROM login,conexion);
/*

if ($result) {   
    echo 'consulta Realizada';
    echo "<h2> Se ha transferido el archivo $array["id_login"]</h2>";
    //echo $pass_login;
    //echo $id_login;
    //	$_SESSION["user"]=$usuario; 	
	//header('Location: /Semillero/estudiante.php');*/

//else echo "Problema con la Consulta";


//}
//else("Connection Failed:".mysqli_connect_error());


/*

if (!$conexion) {
    die("Connection failed: ".mysqli_connect_error());
}

$sql = "SELECT codigo_login,pass_login FROM login where codigo_login='".$usuario."' and pass_login='".$pass."' and id_login=".$select;
$result = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result)==1 && $select==1) {
   
    echo 'credencial correcta';
	$_SESSION["user"]=$usuario; 
	header('Location: /Semillero/estudiante.php');
}
else
  
*/

/* codigo bootstarp para una caja de texto
<div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>
*/
?>