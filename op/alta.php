<?php 
require('/op/conexion_db.php');

         if (isset($_REQUEST['Nombre'])) {
         $Nombre = $_REQUEST['Nombre'];
         } else {
         $Nombre = "";
         }

      

         if (isset($_REQUEST['Categoria'])) {
         $Categoria = $_REQUEST['Categoria'];
         } else {
         $Categoria = "";
         }

         if (isset($_REQUEST['Region'])) {
         $Region = $_REQUEST['Region'];
         } else {
         $Region = "";
         }

         if (isset($_REQUEST['Telefono'])) {
         $Telefono = $_REQUEST['Telefono'];
         } else {
         $Telefono = "";
         }

         if (isset($_REQUEST['Comentario'])) {
         $Comentario = $_REQUEST['Comentario'];
         } else {
         $Comentario = "";
         }

         if (isset($_REQUEST['Email'])) {
         $Email = $_REQUEST['Email'];
         } else {
         $Email = "";
         }

         if (isset($_REQUEST['Estatus'])) {
         $Estatus = $_REQUEST['Estatus'];
         } else {
         $Estatus = "";
         }

         if (isset($_REQUEST['Fecha'])) {
         $Fecha = $_REQUEST['Fecha'];
         } else {
         $Fecha = "";
         }

    mysqli_query($conexion,"INSERT INTO user(UserName, Categoria, Region, Telefono, Estatus, Fecha, Comentario, Email) 
    values('$Nombre', '$Categoria', '$Region', '$Telefono', '$Estatus', '$Fecha', '$Comentario', '$Email')") 
    or die( "user: ".mysqli_error($conexion));
     mysqli_close($conexion);




 ?>


<br>
<a href="..\index.php">back to home</a>    <!-- http://localhost/