<?php 
//Inicio la sesión 
session_start(); 

if (isset($_SESSION['user'])) 
{
        echo "dentro del if"."  <br>";
            echo $_SESSION['user'];

        }
    else
        echo "fuera del if";
  
?>