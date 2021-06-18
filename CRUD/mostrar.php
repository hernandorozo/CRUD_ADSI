<?php include "sesion.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar persona</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="p-3 my-3 bg-dark text-white">
<div class="container p-3 my-3 bg-dark text-white">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">Ejemplo de mostrar datos manejando PL/Sql</div><br>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?php
                include_once "conexion.php";
                $sql="select * from tb_ejemplo";
                //echo $sql;
                $resultado=$conexion->query($sql);
                echo "<table  border='1' class='table table-dark table-striped'><tr><th>Identificación</th><th>Nombres</th><th>Apellidos</th><th>Genero</th></tr>";
                while($fila=mysqli_fetch_array($resultado))
                {
                    echo "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td></tr>";
                }
                echo "</table>";
            ?>
            <a href="desktop.php" class="btn btn-outline-warning">Atras</a>
        </div>
        <div class="col-sm-3"></div> 
    </div>
</div>

</body>
</html>