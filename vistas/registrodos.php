 <?php 
    //registroDos
    $protocolo = $_REQUEST['protocolo'];
	$codigo = $_REQUEST['codigo'];
	//$fechaI = $_REQUEST['fechaI'];//fecha de ingreso al sistema
	$almacen = $_REQUEST['almacen'];
	
	$muestraO = $_REQUEST['muestraO'];
	$muestraR = $_REQUEST['muestraR']; 
	$umedida = $_REQUEST['umedida'];
	$sufijo = $_REQUEST['sufijo'];
	$total = $_REQUEST['total'];
	$cuantificacion = $_REQUEST['cuantificacion'];
	/*$codigoDos = $_REQUEST['codigoDos'];
	$Generar = $_REQUEST['Generar'];   '$codigoDos', '$Generar'*/
    
    //$ = $_REQUEST[''];
	$reqlen = 	strlen($protocolo) * strlen($codigo) * strlen($almacen) * 
	            strlen($muestraO) * strlen($muestraR) * strlen($umedida) * 
	            strlen($sufijo) * strlen($total) * strlen($cuantificacion); /* strlen($codigoDos) * strlen($Generar)*/ 
    if($reqlen > 0)
    {
		require("conexion.php");

		/*INSERT INTO table_name (column1, column2, column3,...)
		  VALUES (value1, value2, value3,...)*/
		$sql1 = "INSERT INTO registroDos (idregistroDos,protocolo,  now(), codigo, almacen)
				VALUES (' ', '$protocolo', 'fechaI', '$codigo', '$almacen')";
		    $id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
		$sql = "INSERT INTO muestra_proc(idmuestra_proc, muestraO, muestraR, umedida, sufijo, total, cuantificacion,)
				VALUES (' ', '$muestraO', '$muestraR', '$umedida', '$sufijo', '$total', '$cuantificacion')";
				
		if ($enlace->query($sql1) === TRUE && $enlace->query($sql) === TRUE)
		{
			echo"Datos ingresados correctamente." . "<br>";	
		}
		else
		{
			echo"Problema al insertar los datos." . $sql1 . "<br>" . $enlace->error;
			echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
		}
		
		mysqli_close($enlace);
		clearstatcache();
		header("location:");
	}
?>	