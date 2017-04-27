<?php

echo "dentro de archivo validacion";
//incluimos lo datos de conexion y las funciones
include("datos.php");
	$usuario=$_POST["fcodigo"];
	$pass=$_POST["fpassword"];
	$select=$_POST["fselect"];
	echo "$usuario";
	echo "$pass";
	echo "$select";

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
echo "se conecta a base de datos";
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
				//echo "<script>Alert('Contraseña Erronea')</script>"; 
			//header('Location: Alerta_Pass.html ');
			echo "contraseña erronea";
				break;
			}
			
			$num_registros--;
		}

if ($num_registros==0)
{
	//header('Location: Pag_Alerta.html ');
	echo "fuera de todo";
					
}
mysqli_close()




?>
