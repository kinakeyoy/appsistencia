<?php


//incluimos lo datos de conexion y las funciones
include("datos.php");
	$usuario=$_POST["fcodigo"];
	$pass=$_POST["fpassword"];
	$select=$_POST["fselect"];

//usamos ese variables
session_start();
//SELECT * FROM Customers
//WHERE CustomerID LIKE '61';
$sql="SELECT * FROM login"or die ("no se pudo contar los registros");

$consulta=mysqli_query($conexion,$sql);
//$num_registros=mysqli_num_array($consulta);
$num_registros=mysqli_num_rows($consulta)or die ("no se pudo contar los registros");


if(mysqli_connect_errno($conexion))
{

	echo "Conexion fallida ".mysqli_connect_error();
}

while ($num_registros>0)
{
	$dato=mysqli_fetch_array($consulta);
	$id2=$dato["id_login"];
	$usuario2=$dato["codigo_login"];
	$pass2=$dato["pass_login"];	
   
		if (($usuario==$usuario2)and($pass==$pass2)and($select==$id2))
				{  
			 
				$_SESSION["user"]=$usuario2;
				if ($select==1)	
				{					 
		        	  
		        	 header('Location: estudiante.php');
				break;
				}
				if ($select==2)
				{					 
		        	 header('Location: tutor.html');
				break;
				}
				if ($select==3)
				{					 
		        	 header('Location: coordinacion.html');
				break;
				}	
			}
		if(($select==$id2)and($usuario==$usuario2)and($pass<>$pass2))
			{
				//echo "<script>Alert('Contraseña Erronea')</script>"; 
			//header('Location: Alerta_Pass.html ');
		
	header('Location: Alerta_Contraseña.html ');
				break;
			}
			
			$num_registros--;
}

if ($num_registros==0)
{
	header('Location: Pag_Alerta.html ');

					
}
mysqli_close($conexion);




?>
