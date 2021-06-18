<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="container bg-dark text-white">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><h3>Administración de permisos</h3></div><br><br>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <br>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <?php
                include_once "conexion.php";
                $sql="select * from rol";
                //echo $sql;
                $resultado=$conexion->query($sql);
                echo "<table  border='1' class='table table-dark table-striped'><tr><th>Id Rol</th><th>Nombre</th><th>Estado</th><th>Agregar</th><th>Editar</th><th>Consultar</th><th>Eliminar</th><th>Administrar</th></tr>";
                while($fila=mysqli_fetch_array($resultado))
                {
                    echo "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td>".$fila[5]."</td><td>".$fila[6]."</td><td>".$fila[7]."</td><td><a href='insertar.php' id='insertar' class='btn btn-outline-warning btn-block'>Editar</a></td></tr>";
                }
                echo "</table>";
            ?>
            <a href="desktop.php" class="btn btn-outline-warning">Atras</a>
        </div>
        <div class="col-sm-2"></div> 
    </div>
</div>
</body>
</html>