<?php
include_once "conexion.php";
$sql="SELECT idrol,rol FROM rol where habil=1";

?>


 <select name="rol" id="rol" class="form-control">
                    <?php
                        $resultado=$conexion->query($sql);

                        while($fila=mysqli_fetch_array($resultado))
                        {
                            echo '<option value="'.$fila[0].'">'.$fila[1].'</option>';
                        }
                    ?>
                </select><br>
                <a href="principal.php" class="btn btn-outline-warning">principal</a>
<input type="text" id="role" onclick="jkl()">

<input type="button" value="Agregar" id="1">
<input type="button" value="Editar" id="2">
<input type="button" value="mostrar" id="3">
<input type="button" value="eliminar" id="4">



<script>
    function jkl(){
var rol=document.getElementById("role").value; 
//alert(rol);
console.log(rol);

if(rol=="1")
{
    document.getElementById("1").style.visibility="visible";
    document.getElementById("2").style.visibility="visible";
    document.getElementById("3").style.visibility="visible";
    document.getElementById("4").style.visibility="visible";
    //document.getElementById("caja1").style.visibility="hidden";
}
if(rol=="4")
{
    document.getElementById("1").style.visibility="none";
    document.getElementById("2").style.visibility="block";
    document.getElementById("3").style.visibility="none";
    document.getElementById("4").style.visibility="block";
}
    }
</script>