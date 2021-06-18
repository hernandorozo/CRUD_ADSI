<?php
    include "sesion.php";
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
        
        <div class="col-sm-12"><?php include "cabeza.php"; ?></div>
        
    </div>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="agregar.php" method="POST" class="was-validated">
                <input placeholder="id" class="form-control" type="text" name="id" id="id" required><br>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required><br>
                <input placeholder="apellido" class="form-control" type="text" name="apellido" id="apellido" required><br>
                <input placeholder="Genero" class="form-control" type="text" name="genero" id="genero" required><br>
                <button class="btn btn-outline-warning">Guardar</button>
                <a href="desktop.php" class="btn btn-outline-warning">Atras</a><br>
            </form>
        </div>
        <div class="col-sm-4"></div> 
    </div>
</div>
<?php
if(isset($_GET['v1'])){
   if($_GET['v1']==0)
    {
        echo"La persona que trata de ingresar ya existe en la base de datos";
    } 
    else
    {
        echo"La persona se ingreso satisfactoriamente";
    } 
}
?>
</body>
</html>