<!DOCTYPE html>
<html>
<head>
	<title>Alta</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
	<div class="pag">
		<div class="galeria">
			<div class="topnav" id="myTopnav">
                <a href="Finanzas.php" class="active">Finace</a>
                <a href="Proyectos.php">Projects</a>
                <a href="alta.php">Create</a>
                <a href="consulta.php">Search</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <div class="dcols">
			    <div class="formulario" id="Contact">
                    <form method="post" >
                        <div class="w3-group">
                            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" placeholder="Please write client's name" name="UserName" required></br>
                            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" placeholder="Region" name="Region" required></br>
                            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" placeholder="Phone number" name="Phone" required></br>
                            <select name="Categoria" required>  
                                <option value="Pintura">Painting</option>
                                <option value="Plomeria">Plumbing</option>
                                <option value="Diseno">Home design interior</option>
                                <option value="Building">Building</option>
                                <option value="Carpentry">Carpentry</option>
                            </select>
                            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" placeholder="Other" name="Comentario"></br>
                            <select name="Estatus" required>  </br>
                                <option value="pendiente">Waiting</option>
                                <option value="rechazado">Decline</option>
                                <option value="terminado">Finished</option>
                            </select></br>
                            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" placeholder="Cost (only if the work as Finished)" name="Cost" >
                            </br>
                            <input type="submit" action="../op/alta.php" class="w3-btn w3-btn-block w3-padding-12" />
                        </div>
                        
                    </form>

                </div>
                <div class="cols2">
                    <img class="cimg2" src="../img/d3.jpg">
                </div>
            </div>
            <div class="footer">
                <p class="fa">Edgar Alberto Guerrero Rubio IDS TecMilenio</br>
                Desarrollo de proyecto de  ingenier&iacute;a de software</br>
                GR_design phone 521 3311967563</p>
            </div>
		</div>
        
	</div>
</body>
</html>

<?php 
require('../op/conexion_db.php');

         if (isset($_REQUEST['UserName'])) {
         $UserName = $_REQUEST['UserName'];
         } else {
         $UserName = "";
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

         if (isset($_REQUEST['Phone'])) {
         $Phone = $_REQUEST['Phone'];
         } else {
         $Phone = "";
         }


         /*if (isset($_REQUEST['Fecha'])) {
         $Fecha = $_REQUEST['Fecha'];
         } else {
         $Fecha = "";
         }*/

         if (isset($_REQUEST['Comentario'])) {
         $Comentario = $_REQUEST['Comentario'];
         } else {
         $Comentario = "";
         }

        

         if (isset($_REQUEST['Estatus'])) {
         $Estatus = $_REQUEST['Estatus'];
         } else {
         $Estatus = "";
         }

          if (isset($_REQUEST['Email'])) {
         $Email = $_REQUEST['Email'];
         } else {
         $Email = "";
         }


    mysqli_query($conexion,"INSERT INTO user(UserName, Categoria, Region, Telefono, Estatus, Comentario, Email) 
    values('$UserName', '$Categoria', '$Region', '$Phone', '$Estatus', '$Comentario', '$Email')") 
    or die( "user: ".mysqli_error($conexion));
     mysqli_close($conexion);

 ?>