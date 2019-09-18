<?php
require('conexion_db.php');
//validacion de usuarios
if (isset($_REQUEST['id'])) {
         $id = $_REQUEST['id'];
         } else {
         $id = "";
         }

if (isset($_REQUEST['contrasena'])) {
         $contrasena = $_REQUEST['contrasena'];
         } else {
         $contrasena = "";
         }


         
 if($id ==1234 && $contrasena==paola){
   echo("Hola"); 
    header("Location:../form/registro.php"); 
}elseif($id !=1234 || $contrasena != pola){
    echo "contrase&nacute;a invalida:v";
    header("Location:../index.php"); 

     }

 


?>
<a href="../index.php">Salir</a>