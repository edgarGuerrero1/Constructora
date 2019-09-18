<!DOCTYPE html>
<html>
<head>
    <title></title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
      <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<style>
    table{
       
        margin top: 10px;
        width: 100%;
    }
    th,td{
        margin-left: 0;
        text-align: left;
        border-collapse: collapse;
        outline: 1px solid #666;
    }

    td{
        padding: 5px 10px;
    }

    th{
        background: #4CA386; 
        padding: 5px 10px;
    }

    td:hover{
        background: #b1e0bc;
        color: black;
    }
</style>


    <body class="pag">
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
            <div class="Tcategoria">
                    <p>Search project</p>

            </div>
            <?php 
                require("../op/conexion_db.php");

                if (isset($_REQUEST['UserName'])) {
                 $UserName = $_REQUEST['UserName'];
                 } else {
                 $UserName = "";
                }
        
                $sql = "SELECT * FROM user where UserName='$UserName'"; 
                if($result = mysqli_query($conexion, $sql)){
                        if(mysqli_num_rows($result) > 0){
                           
                            echo "<table>";
                                echo "<tr>";
                                    echo "<th>Nombre</th>";
                                    echo "<th>Categoria</th>";
                                    echo "<th>Fecha</th>";
                                    echo "<th>Email</th>";
                                    echo "<th>Costo</th>";
                                    echo "<th>Costo con iva</th>";
                                echo "</tr>";

                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['UserName'] . "</'td>";
                                    echo "<td>" . $row['Categoria'] . "</td>";
                                    echo "<td>" . $row['Fecha'] . "</td>";
                                    echo "<td>" . $row['Email'] . "</td>";
                                    echo "<td>" . $row['Costo'] . "</td>";
                                    /*echo "<td>" . $row['Civa'] . "</td>";*/
                                echo "</tr>";
                            } 
                            echo "</table>";
                            // Close result set
                            mysqli_free_result($result);
                        } 
                        else{
                            echo "No records matching your query were found.";
                        }
                    } 
                    else{
                        echo "ERROR: El query no funciona $sql. " . mysqli_error($conexion);
                    }  
                    // Close connection
                    mysqli_close($conexion); 
                  
            ?>
            <div>
                <a href="consulta.php" class="tit2">Go back</a>
            </div>
        </div>

    <div class="footer">
        <p class="fa">Edgar Alberto Guerrero Rubio IDS TecMilenio</br>
                Desarrollo de proyecto de  ingenier&iacute;a de software</br>
                GR_design phone 521 3311967563</p>
    </div>
    </body>
</html>




