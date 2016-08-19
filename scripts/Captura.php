<?php
    //registroUno
	//responsable
	$nombre = $_POST['nombre'];
    $appaterno = $_POST['appaterno'];
    $apmaterno = $_POST['apmaterno'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
	//muestra
    $muestra = $_POST['muestra'];
    $contenedor = $_POST['contenedor'];
    $umedida = $_POST['umedida'];
    $sufijo = $_POST['sufijo'];
    $total = $_POST['total'];
    //caracteristicas
	$fechaR = $_POST['fechaR'];
	$observ = $_POST['observ'];
	$resguardo = $_POST['resguardo'];
	$protocolo = $_POST['protocolo'];
	$almacen = $_POST['almacen'];
    //Validando entrada 
	$reqlen = strlen("$nombre") *  strlen("$appaterno") *  strlen("$apmaterno") *  strlen("$fecha") *  strlen("$hora") * /*responsable*/ 
	          strlen("$muestra") * strlen("$contenedor") *  strlen("$umedida") *  strlen("$sufijo") *  strlen("$total") * /*muestra*/
			  strlen("$fechaR") * strlen("$observ") * strlen("$resguardo") *  strlen("$protocolo") * strlen("$almacen"); /*caracteristicas*/
	if($reqlen > 0)
    {
		$enlace = mysqli_connect('localhost', 'root', '', 'laboratorio');
			if (!$enlace) 
			{
				die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
			}
			//require("php/conexion.php");//haciendo un llamdo a la base de datos
			/*Inicio de RegistroUno*/
			/*$sql = "INSERT INTO table_name (column1, column2, column3,...)
					VALUES (value1, value2, value3,...)";*/
			    
            //caracteristicas
            $sql = "INSERT INTO caracteristicas (idcaracteristicas, fechaR, observ, resguardo, protocolo, almacen)
                    VALUES (' ', '$fechaR', '$observ', '$resguardo', '$protocolo', '$almacen')";     
            	
            if ($enlace->query($sql) === TRUE)
			{
				echo"Datos ingresados correctamente (caracteristicas de la muestra)." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			} 
			//muestra
			$sql = "INSERT INTO muestra (idmuestra, muestra, contenedor, umedida, sufijo, total, caracteristicas_idcaracteristicas)
                    VALUES (' ', '$muestra', '$contenedor', '$umedida', '$sufijo', '$total', '$id')";     
		    if ($enlace->query($sql) === TRUE)
			{
				echo"Datos ingresados correctamente (De la muestra)." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}
			//insercion del responsable
			$sql = "INSERT INTO Responsable (idResponsable, nombre, appaterno, apmaterno, fecha, hora)
                    VALUES (' ', '$nombre', '$appaterno', '$apmaterno', '$fecha', '$hora')";
			if ($enlace->query($sql) === TRUE)
			{
				echo"Datos ingresados correctamente (Del responsable)." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}
			//codigo numerico y de barras
			$sql = "INSERT INTO codigo (idcodigo, muestra_idmuestra, Responsable_idResponsable)
					VALUES (' ', '$id', '$id')";
			if ($enlace->query($sql) === TRUE)
			{
				echo"Datos ingresados correctamente (Del la captura)." . "<br>";
			}
			else
			{
				echo"Problema al insertar los datos." . $sql1 . "<br>" . $enlace->error;
			}
			/*Fin de RegistroUno*/
			mysqli_close($enlace);
		clearstatcache();
		header("location:../vistas/MuestrasII.php");
	}
?>