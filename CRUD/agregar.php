<link rel="stylesheet" href="css/bootstrap.min.css">
<div class="container">
<?php
include_once "conexion.php";
$id= $_POST["id"];
$nombre = $_POST["nombre"];
$apellido=$_POST["apellido"];
$genero=$_POST["genero"];
$valores= "'".$id ."','". $nombre ."','".$apellido."','".$genero."'";
//$sql="INSERT INTO tb_ejemplo(id,nombre,apellido,genero) VALUES($valores)";


$sql="Call spNuevo($valores,@rta);";

$resultado=$conexion->query($sql);

while($fila=mysqli_fetch_array($resultado))
{
   
   if($fila[0]==0)
   {
      echo "<script>
      window.location.href='insertar.php?v1=0'
      </script>";   
   }
   else
   {
      echo "<script>
      window.location.href='insertar.php?v1=1'
      </script>";
   }
   
}

?>

</div>