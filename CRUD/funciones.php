<?php

function votante_login($consulta)
	{/*Funcion que sirve para consultar un solo campo 
	   de una tabla según su id
	   Desarrollo Hernando Rozo 23 Feb 2006*/
		$sql=$consulta;
		include( "servidor.php" );
		$salida=$result;
		return $salida;
		/*while ($row =mysql_fetch_assoc($result)) 
		{  
			if($rta==1){$e = $row['docjur'];}
			echo $row['nomusu'];
			if($rta==2){$e = $row['pass'];}*/
	}
//***************************************************************************
		function actualizar($campo,$tabla,$id,$valor)
	{/*Funcion que sirve para actualizarun dato de una tabla
	   Desarrollo Hernando Rozo 24 Feb 2006*/
	   
	   $sql="UPDATE ".$tabla ." SET ".$campo." = ".$valor. " WHERE ".$id;
	   //echo "<script> alert($sql)</script>";
	   include( "servidor.php" );
	   return 0;
	}
//***************************************************************************
function consultar($tabla,$campollave,$valor)
	{/*Funcion que sirve para traer datos de una tabla 
	   Desarrollo Hernando Rozo 13 Feb 2006*/
		if ($campollave=="0") 
		{
		$sql="select * from $tabla";
		}
		else
		{
		$sql="select * from $tabla where $campollave = $valor"; //order by $campollave";
		}
		include( "servidor.php" );
		$salida=$result;
		return $salida;
	}

//***************************************************************************
	function juez_login($campo,$tabla,$campollave,$valor,$rta)
	{/*Funcion que sirve para consultar un solo campo 
	   de una tabla según su id
	   Desarrollo Hernando Rozo 23 Feb 2006*/
		$sql="select ".$campo." from ".$tabla." where ". $campollave ." = ". $valor;
		include( "servidor.php" );
		while ($row =mysql_fetch_assoc($result)) 
		{  
			if($rta==1){$e = $row['docjur'];}
			if($rta==2){$e = $row['pass'];}
		}
		
		if (empty($e)) {
			$e="";
		}
		return $e;
		/*docjur
nomjur
apejur
mesjur
sedejur
jorju*/
	} 


	
//***************************************************************************
	function guardar_datos($tabla,$columna,$valor,$condicion)
	{/* Funcion que sirve para guardar los puntos de los dados 
	   del jugador elegido. $condicion debe traer la condición
	   Desarrollo Hernando Rozo 23 Feb 2006*/
	   	include( "servidor.php" );
		session_start();
//		$tmp1=$_session['session_username'];
		$tmp=consultar_valores($columna,$tabla,$condicion,1);
		//$_session['jkl']=$tmp;
		//echo $tmp;
		$valor=$valor+$tmp;
		$sql="UPDATE ".$tabla ." SET ".$columna."=".$valor." WHERE id =".$condicion;
		//echo $sql;
		$link=mysql_connect( $servidor, $usuario, $clave );
		mysql_select_db( $bd, $link );
		$result=mysql_query($sql,$link);
		/*if(mysql_affected_rows()==1)
		{
			if($valor==1)
			{
			
			}
		}*/
		return 0;
	}
//***************************************************************************

    function actualiza_ocupacion($id,$valor)
    { /*Funcion que sirve para actualizar el estado del 
	   jugador elegido $valor debe ser 1 si se ocupa y 0
	   cuando se desocupa
	   Desarrollo Hernando Rozo 13 Feb 2006*/
        include( "servidor.php" );
		$sql="UPDATE parkex SET ocupado = " .$valor . " WHERE id = ".$id;
        
		$link=mysql_connect( $servidor, $usuario, $clave );
		mysql_select_db( $bd, $link );
		$result=mysql_query($sql,$link);
		if(mysql_affected_rows()==1)
		{
			if($valor==1)
			{
				?><script> alert("El jugador Fue agregado con exito");
    			</script><?php
			}
			else
			{
				?><script> alert("El jugador Fue sacado con exito");
    			</script><?php
			}
		}
    }
//***************************************************************************

//***************************************************************************
//***************************************************************************
	function retornar_tabla($a,$b)
	{
	$salida="<table width='400' border='1' cellspacing='3'>
	<caption>Tabla de Jugadores</caption>
  <tr>
    <td>Jugador</td>
    <td>Puntaje</td>
    <td>Turno</td>
  </tr>";
//	$salida."<table width='200' border='1' cellspacing='3'>";
  	$salida.= "<tr><td>".$a."</td><td>".$b."</td></tr></table>";
	return $salida;
	}
	
	







?>

