<?php 
   
    //paciente
	$nombre = $_POST['nombre'];
    $appaterno = $_POST['appaterno'];
    $apmaterno = $_POST['apmaterno'];
    $nacimiento = $_POST['nacimiento'];
    $numero =  $_POST['numero'];
    $edad = $_POST['edad'];
    $tiempo = $_POST['tiempo'];
    $sexo = $_POST['sexo'];
	//acchivo a subir
	
    $nombre_archivo_cliente = $_POST['nombre_archivo_cliente'];
	//medico
	$nombre = $_POST['nombre'];
    $appaterno = $_POST['appaterno'];
    $apmaterno = $_POST['apmaterno'];
    $clave = $_POST['matricula'];
	$reqlen = /*paciente*/strlen($nombre) * strlen($appaterno) * strlen($apmaterno) * strlen($nacimiento) * 
			  strlen($numero) * strlen($edad) * strlen($tiempo) * strlen($sexo)/*paciente*/ *
		      /*medico*/ strlen($nombre) * strlen($appaterno)* strlen($apmaterno)* strlen($matricula)/*medico*/;
	if($reqlen > 0)
    {
		$enlace = mysqli_connect('localhost', 'root', '', 'laboratorio');
			if (!$enlace) 
			{
				die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
			}
		//inserciòn del archivo
		
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
			print ("No se ha podido subir el fichero");
		
		
		//insercion del paciente
			$sql = "INSERT INTO paciente (idpaciente, nombre, appaterno, apmaterno, nacimiento, numero, edad, tiempo, sexo)
                    VALUES (' ', '$nombre', '$appaterno', '$apmaterno', '$nacimiento', '$numero', '$edad', '$tiempo', '$sexo')";
		//insercion del médico
			$sql = "INSERT INTO medico (idmedico, nombre, appaterno, apmaterno, clave)
                    VALUES (' ', '$nombre', '$appaterno', '$apmaterno', '$matricula')";
		//validando entrada	
		
			if ($enlace->query($sql) === TRUE)
			{
				header("location:../vistas/Historial.php");
			}		
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}
		mysqli_close($enlace);
	    clearstatcache();
	    
	}		
?>