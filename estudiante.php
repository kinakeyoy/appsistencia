<?php 
//Inicio la sesión 
session_start(); 

<<<<<<< HEAD
if (isset($_SESSION['user'])) 
{
        echo "dentro del if"."  <br>";
            echo $_SESSION['user'];
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
      
  </head>
  <body>
   //<?php
   //session_start();    
   // ?>
     
      
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Appsintencia</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Estudiante</a></li>
      <li><a href="#">Agregar Asignatura</a></li>
      <li><a href="#">Validar Asistencia</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"> <?php echo "$_SESSION[user]"; ?> </span></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Log out</a></li>
    </ul>
  </div>
</nav>  
>>>>>>> 485e18469a5eedb6b35a880a5f6f551b58d7cbff

        }
    else
        echo "fuera del if";
  
<<<<<<< HEAD
?>
=======
  </body>
</html>
	
	
>>>>>>> 485e18469a5eedb6b35a880a5f6f551b58d7cbff
