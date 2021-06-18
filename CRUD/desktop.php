<?php
session_start();
if(!isset($_SESSION['usu'])){
    header('Location: index.php');
       //session_destroy();
       die();
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de PHP con MySQLi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="p-3 my-3 bg-dark text-white">
<?php include "cabeza.php"; ?>

<div class="container p-3 my-3 bg-dark text-white">
<?php
include_once "conexion.php";
$sql="SELECT rol from rol where idrol='".$_SESSION['rol']."'"; 
$resultado=$conexion->query($sql);
while($fila=mysqli_fetch_array($resultado))
    {
        echo $fila[0];
    }    
?>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">Bienvenido <?php echo $_SESSION['usu'];?></div>
    </div>
    <div class="row">
        <br>
    </div>
    <div class="row">
        <?php
            include_once "conexion.php";
            $sql="SELECT agrega,edita,muestra,elimina,administrar  FROM rol where idrol='".$_SESSION['rol']."'";
            $resultado=$conexion->query($sql);
            echo"<div class='col-sm-4'>";
             while($fila=mysqli_fetch_array($resultado))
                {
                    if($fila[0]==1){
                        echo"<a href='insertar.php' id='insertar' class='btn btn-outline-warning btn-lg btn-block' style='width: 100%;'>Agregar Persona</a><br><br>";
                    }
                    if($fila[1]==1){
                        echo"<a href='mostrar.php' id='mostrar' class='btn btn-outline-warning btn-lg btn-block' style='width: 100%;'>Mostrar Personas</a><br><br>";
                    }
                    if($fila[2]==1){
                        echo"<a href='editar.php' id='editar' class='btn btn-outline-warning btn-lg btn-block' style='width: 100%;'>Editar Personas</a><br><br>";
                    }
                    if($fila[3]==1){
                        echo"<a href='borrar.php' id='borrar' class='btn btn-outline-warning btn-lg btn-block' style='width: 100%;'>Borrar Personas</a><br><br>";
                    }
                    if($fila[4]==1){
                        echo"<a href='administrar.php' id='administrar' class='btn btn-outline-warning btn-lg btn-block' style='width: 100%;'>Administrar Permisos</a><br><br>";
                    }
                }
        ?>
        </div>
        <div class="col-sm-4"></div> 
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <a href="cerrar.php" id="cerrar" class="btn btn-outline-warning btn-lg btn-block" style='width: 100%;'>Cerrar sesión</a>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
    </div>
</div>
<?php include "pie.php"; ?>
</body>
</html>
