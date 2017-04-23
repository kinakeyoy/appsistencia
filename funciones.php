<?php
include("datos.php")

function conectarBase($host,$usuario,$clave,$base){

	if(!$enlace=@mysql_connect($host,$usuario,$clave)){
//notemos la arroba antepuesta a la funcion que devolvia el error

return false;
	}elseif (!mysql_select_db($base)) {
		return false;
		# code...
	}else{

		return true;
	}


}


?>	

