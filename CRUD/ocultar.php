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
                <a href="principal.html" class="btn btn-outline-warning">Atras</a>