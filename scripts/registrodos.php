 <?php 
    //registroDos
	//Quinico
	$nombre = $_REQUEST['nombre'];
	$appaterno = $_REQUEST['appaterno'];
	$apmaterno = $_REQUEST['apmaterno'];
	//registroDos
	$folio = $_REQUEST['folio'];
    $protocolo = $_REQUEST['protocolo'];
	$tipomuestra = $_REQUEST['tipomuestra'];
	//proceso de la muestra
	$ensayo = $_REQUEST['ensayo'];
	$resultado = $_REQUEST['resultado'];
	$observ = $_REQUEST['observ'];
	$fechaP = $_REQUEST['fechaP'];
	//$fechaI = $_REQUEST['fechaI'];
    //$ = $_REQUEST[''];
	$reqlen = 	strlen($folio) * strlen($protocolo) * strlen($tipomuestra) *//registroDos
	            strlen($nombre) * strlen($appaterno) * strlen($apmaterno) *//Quinico
	            strlen($ensayo) * strlen($resultado) *  strlen($observ) * strlen($fechaP);//proceso de la muestra 
    if($reqlen > 0)
    {
		//require("/conexion.php");
		$enlace = mysqli_connect('localhost', 'root', '', 'laboratorio');
			if (!$enlace) 
			{
				die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
			}
		/*INSERT INTO table_name (column1, column2, column3,...)
		  VALUES (value1, value2, value3,...) */
		//quìmico
		$sql = "INSERT INTO quimico (idquimico, nombre, appaterno, apmaterno)
				VALUES (' ', '$nombre', '$appaterno', '$apmaterno' )";
		if ($enlace->query($sql) === TRUE)
			{
				echo"Datos ingresados correctamente (Quìmico)." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}
		//proceso de la muestra 
		$sql = "INSERT INTO muestra_proc(idmuestra_proc, ensayo, resultado, observ, fechaP)
				VALUES (' ', '$ensayo', '$resultado', '$observ', '$fechaP')";
		if ($enlace->query($sql) === TRUE)
			{
				echo"Datos ingresados correctamente (Proceso de la muestra )." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}
		
		//registroDos  
		$sql = "INSERT INTO registroDos (idregistroDos, folio, protocolo, tipomuestra, quimico_idquimico, muestra_proc_idmuestra_proc) 
		        VALUES (' ', '$folio', '$protocolo', '$tipomuestra', '$id', '$id')";
		if ($enlace->query($sql) === TRUE)
			{
				echo"Datos ingresados correctamente (Rejistro dos)." . "<br>";
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}
		/*Fin de RegistroUno*/	
		mysqli_close($enlace);
		clearstatcache();
		header("location:../vistas/ProcesoII.php");
	}
?>	