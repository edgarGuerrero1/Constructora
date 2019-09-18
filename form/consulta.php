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
        background: #93bc9c; 
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
        <div class="imed">
            <p class="tit2">Search project</p>
                <img class="imed" src="../img/chic.jpg">
            </div>
        <div class="Tcategoria">
            
            
            <form method="post" action="consulta_b.php">
                <div class="w3-group">
                    <label class="tit2">Client Name</label>
                    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" placeholder="Please write client's name" name="UserName" required>
                </div>
                <input type="submit" class="w3-btn w3-btn-block w3-padding-12" />
            </form>
        </div>
       
    </div>

    <div class="footer">
        <p class="fa">Edgar Alberto Guerrero Rubio IDS TecMilenio</br>
                Desarrollo de proyecto de  ingenier&iacute;a de software</br>
                GR_design phone 521 3311967563</p>
    </div>

</body>
</html>


