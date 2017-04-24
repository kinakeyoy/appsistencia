<?php
// incluimos lo datos de conexion y las funciones
include("datos.php");
	$usuario=$_POST["fcodigo"];
	$pass=$_POST["fpassword"];
	$select=$_POST["fselect"];
//usamos ese variables
session_start();
//SELECT * FROM Customers
//WHERE CustomerID LIKE '61';
$consulta=mysqli_query($conexion,"SELECT id_login, codigo_login,pass_login FROM login");
$num_registros=mysqli_num_rows($consulta);
while ($num_registros>0){
	$dato=mysqli_fetch_array($consulta);
	$usuario2=$dato["codigo_login"];
	$pass2=$dato["pass_login"];
	$id2=$dato["id_login"];

		if (($usuario==$usuario2)and($pass==$pass2)and($select==$id2))
			{     
				$_SESSION["user"]=$usuario2;
				if ($select==1){					 
		        	 header('Location: estudiante.php ');
				break;
				}
				if ($select==2){					 
		        	 header('Location: tutor.html ');
				break;
				}
				if ($select==3){					 
		        	 header('Location: coordinacion.html ');
				break;
				}	
			}
		if(($select==$id2)and($usuario==$usuario2)and($pass<>$pass2))
			{
				echo "<script>Alert('Contraseña Erronea')</script>";  	 //header('Location: Alerta_Pass.html ');
				break;
			}
			
			$num_registros--;
		}

if ($num_registros==0)
{
	header('Location: Pag_Alerta.html ');
					
}
mysqli_close()



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
