<?php
include_once "conexion.php";
$id= $_POST["id"];
$sql="DELETE from tb_ejemplo where id= '".$id."'";
$resultado=$conexion->query($sql);

if($resultado)
{
   echo "<script>
   window.location.href='borrar.php?v1=1'
   </script>";   
}
else
{
   echo "<script>
   window.location.href='borrar.php?v1=0'
   </script>";
}
?>
