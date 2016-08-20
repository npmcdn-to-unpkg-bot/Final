<?php 
   
    //paciente
	$nombre = $_POST['nombre'];
    $appaterno = $_POST['appaterno'];
    $apmaterno = $_POST['apmaterno'];
    $nacimiento = $_POST['nacimiento'];
    $numero =  $_POST['numero'];
    $sexo = $_POST['sexo'];
	//tiempo
    $edad = $_POST['edad'];
    $tiempo = $_POST['tiempo'];
	//acchivo a subir
    $nombre_archivo_cliente = $_POST['nombre_archivo_cliente'];
    $nombreFichero= $_POST['nombreFichero'];
	//medico
	$nombre = $_POST['nombre'];
    $appaterno = $_POST['appaterno'];
    $apmaterno = $_POST['apmaterno'];
    $matricula = $_POST['matricula'];
	$reqlen = /*paciente*/strlen($nombre) * strlen($appaterno) * strlen($apmaterno) * strlen($nacimiento) * strlen($nombreFichero) * 
			  strlen($numero) * strlen($edad) * strlen($tiempo) * strlen($sexo)/*paciente*/ * strlen($nombre_archivo_cliente) *
		      /*medico*/ strlen($nombre) * strlen($appaterno)* strlen($apmaterno)* strlen($matricula)/*medico*/;
	if($reqlen > 0)
    {
		$enlace = mysqli_connect('localhost', 'root', '', 'laboratorio');
			if (!$enlace) 
			{
				die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
			}
		//inserciòn del archivo
		if(is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name']))
		{
			$directorio="archivos suvidos/";
			$nombreFichero = $_FILES['nombre_archivo_cliente']['name'];
			$nombreCompleto = $nombreDirectorio . $nombreFichero;
		}
		
		
		
		
		if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name']))
		{
			$nombreDirectorio = "/directorio_archivos_movidos";
			$nombreFichero = $_FILES['nombre_archivo_cliente']['name'];
			$nombreCompleto = $nombreDirectorio . $nombreFichero;
			if (is_file($nombreCompleto))
			{
				$idUnico = time();
				$nombreFichero = $idUnico . "-" . $nombreFichero;
			}
			move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio.$nombreFichero);
		}
		else
		{
			print ("No se ha podido subir el fichero");
		}
		//tiempo del paciente
			$sql = "INSERT INTO Tiempo (idTiempo, edad, tiempo)
					VALUES (' ', , '$edad', '$tiempo')";
			if($enlace->query($sql) === TRUE)
			{
				echo"Datos ingresados correctamente (Tiempo)." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}
		//insercion del paciente
			$sql = "INSERT INTO paciente (idpaciente, nombre, appaterno, apmaterno, nacimiento, numero, sexo Tiempo_idTiempo)
                    VALUES (' ', '$nombre', '$appaterno', '$apmaterno', '$nacimiento', '$numero', '$sexo', '$id')";
			if($enlace->query($sql) === TRUE)//validando entrada
			{
				echo"Datos ingresados correctamente (Paciente)." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}	
		//insercion del médico
			$sql = "INSERT INTO medico (idmedico, nombre, appaterno, apmaterno, clave)
                    VALUES (' ', '$nombre', '$appaterno', '$apmaterno', '$matricula')";
			if($enlace->query($sql) === TRUE)//validando entrada
			{
				echo"Datos ingresados correctamente (Medico)." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}
        //tabla Hitoria clinica completa     
            $sql = "INSERT INTO Hclinica (idHclinica, nombreFichero, medico_idmedico, paciente_idpaciente)
					VALUES (' ', '$nombreFichero', '$id', '$id')";
			if($enlace->query($sql) === TRUE)//validando entrada
			{
				echo"Datos ingresados correctamente (Hitoria clinica completa)." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			} 
		/*Fin de la historia clinica*/	
		mysqli_close($enlace);
	    clearstatcache();
	    //header("location:../vistas/Historial.php");
	}		
?>