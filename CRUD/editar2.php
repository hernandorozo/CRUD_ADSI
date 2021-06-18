<link rel="stylesheet" href="css/bootstrap.min.css">
<div class="container">

<?php
include_once "conexion.php";
$id= $_POST["id"];
$nombre = $_POST["nombre"];
$apellido=$_POST["apellido"];
$genero=$_POST["genero"];
$valores= "'".$id ."','". $nombre ."','".$apellido."','".$genero."'";
$sql="UPDATE tb_ejemplo SET id= '".$id ."', nombre= '" .$nombre. "', apellido='".$apellido."', genero='".$genero."' WHERE id=".$id;

$resultado=$conexion->query($sql);

if($resultado)
{
   echo "<script>
   window.location.href='editar.php?v1=1'
   </script>";   
}
else
{
   echo "<script>
   window.location.href='editar.php?v1=0'
   </script>";
}
?>
</div>