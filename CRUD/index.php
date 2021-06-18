<?php
    include_once "conexion.php";
    $sql="SELECT idrol,rol FROM rol where habil=1";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/util.js"></script>
    <title>Iniciar sesión</title>
</head>
<body class="bg-dark text-white"><!-- class="p-3 my-3 bg-dark text-white" -->
<div class="container-fluid bg-dark text-white">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <center>
                <img src="img/avatar.png" id="avatar">
            </center>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <div class="col-md-4 m-0 p-0"></div>
        <div class="col-md-4 m-0 p-0">
            <form action="chklogin.php" method="POST" class="was-validated">
                <input placeholder="Usuario" class="form-control" type="text" name="usu" id="usu" required><br>
                <input placeholder="Contraseña" class="form-control" type="password" name="pwd" id="pwd" required><br>
                <select name="rol" id="rol" class="form-control">
                    <?php
                        $resultado=$conexion->query($sql);

                        while($fila=mysqli_fetch_array($resultado))
                        {
                            echo '<option value="'.$fila[0].'">'.$fila[1].'</option>';
                        }
                    ?>
                </select><br>
                <button class="btn btn-outline-warning btn-block" style="width: 100%;">Iniciar</button>
                <br><br>
            </form>
        </div>
        <div class="col-md-4 m-0 p-0"></div>
        
    </div>
    <div class="row">
        <div class="col-md-4 m-0 p-0"></div>
        <div class="col-md-4 m-0 p-0">
        
        <?php
            if(isset($_GET['v1'])){
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>";
                    if($_GET['v1']==1)
                    {   
                    } 
                    else
                    {
                        echo"Se ha generado un error en las credenciales, ingrese de nuevo";
                    } 
                echo"</div>";
            }
        ?>
        </div>
        <div class="col-md-4 m-0 p-0"></div>
    </div>
</div>
</body>
</html>