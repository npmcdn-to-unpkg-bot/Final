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
    $tiempoV = $_POST['tiempoV'];/*Tiempo de vida*/
	//medico
	$nombreMD = $_POST['nombreMD'];
    $appaternoMD = $_POST['appaternoMD'];
    $apmaternoMD = $_POST['apmaternoMD'];
    $matricula = $_POST['matricula'];
	//Fichero
	$nombreFichero = ' ';
	$reqlen = /*paciente*/strlen($nombre) * strlen($appaterno) * strlen($apmaterno) * strlen($nacimiento) *
			  strlen($numero) * strlen($edad) * strlen($tiempoV) * strlen($sexo)/*paciente*/ * 
		      /*medico*/ strlen($nombreMD) * strlen($appaternoMD)* strlen($apmaternoMD)* strlen($matricula)/*medico*/;
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
			$directorio="archivos suvidos";
			$nombreFichero = $_FILES['nombre_archivo_cliente']['name'];
			$nombreCompleto = $directorio . $nombreFichero;
			if (is_file($nombreCompleto))
			{
				$idUnico = time();
				$nombreFichero = $idUnico . "-" . $nombreFichero;
				echo"El fichero fue subido exitosamente." . "<br>";
			}
			move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $directorio.$nombreFichero);
		}
		else
		{
			print ("No se ha podido subir el fichero" . "<br>");
		}
		//tiempo del paciente
			$sql = "INSERT INTO Tiempo (idTiempo, edad, tiempoV)
					VALUES (' ',  '$edad', '$tiempoV')";
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
			$sql = "INSERT INTO paciente (idpaciente, nombre, appaterno, apmaterno, nacimiento, numero, sexo, Tiempo_idTiempo)
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
			$sql = "INSERT INTO medico (idmedico, nombreMD, appaternoMD, apmaternoMD, matricula)
                    VALUES (' ', '$nombreMD', '$appaternoMD', '$apmaternoMD', '$matricula')";
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