<?php
include_once "conexion.php";
$usu= $_REQUEST["usu"];
$pwd = $_POST["pwd"];
$rol=$_REQUEST["rol"];

$sql="SELECT * FROM tb_login WHERE usu = '$usu'";
//echo $sql;

$resultado=$conexion->query($sql);

while($fila=mysqli_fetch_array($resultado))
{
   if($fila[0]==$usu && $fila[1]==$pwd){
        session_start();
        $_SESSION['usu']=$_REQUEST['usu'];
        $_SESSION['rol']=$_REQUEST['rol'];
        header('Location: desktop.php');
        die();
        //echo "<script>window.location.href='desktop.php'</script>"; 
        //$SESSION_START();
        //$_SESSION['usu']=$usu;
   }
   else{
        echo "<script>
        window.location.href='index.php?v1=504'
        </script>";
   }
}
?>