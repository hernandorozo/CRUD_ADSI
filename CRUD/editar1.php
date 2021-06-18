<?php
include_once "conexion.php";
$id= $_POST["id"];
$sql="select * from tb_ejemplo where id= '".$id."'";
$resultado=$conexion->query($sql);
?>

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
        <div class="col-sm-4">Ejemplo de insertar manejando PL/Sql</div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="editar2.php" method="POST" class="was-validated">
                <?php while($fila=mysqli_fetch_array($resultado)){?>
                <input placeholder="id" class="form-control" type="hidden" name="id" id="id" value="<?php echo $fila[0];?>" required><br>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $fila[1];?>" required><br>
                <input placeholder="apellido" class="form-control" type="text" name="apellido" id="apellido" value="<?php echo $fila[2];?>" required><br>
                <input placeholder="Genero" class="form-control" type="text" name="genero" id="genero" value="<?php echo $fila[3];?>" required><br>
                <button class="btn btn-outline-warning">Guardar</button>
                <a href="desktop.php" class="btn btn-outline-warning">Atras</a><br>
                <?php } ?>
            </form>
        </div>
        <div class="col-sm-4"></div> 
    </div>
</div>

</body>
</html>