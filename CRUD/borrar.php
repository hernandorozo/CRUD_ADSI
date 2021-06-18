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
        <div class="col-sm-4">Ejemplo de Borrar manejando PL/Sql</div><br><br>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="borrar1.php" method="POST" class="was-validated">
                <input placeholder="id" class="form-control" type="text" name="id" id="id" required><br>
                <button class="btn btn-outline-warning">Borrar</button>
                <a href="desktop.php" class="btn btn-outline-warning">Atras</a><br><br>
            </form>
        </div>
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
<?php
if(isset($_GET['v1'])){
   if($_GET['v1']==1)
    {
        echo"Borrado exitoso";
    } 
    else
    {
        echo"Se ha generado un error en el borrado";
    } 
}
?>
</body>
</html>