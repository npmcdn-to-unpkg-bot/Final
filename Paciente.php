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
		//insercion del paciente
			$sql = "INSERT INTO paciente (idpaciente, nombre, appaterno, apmaterno, nacimiento, numero, edad, tiempo, sexo)
                    VALUES (' ', '$nombre', '$appaterno', '$apmaterno', '$nacimiento', '$numero', '$edad', '$tiempo', '$sexo')";
		//insercion del médico
			$sql = "INSERT INTO medico (idmedico, nombre, appaterno, apmaterno, clave)
                    VALUES (' ', '$nombre', '$appaterno', '$apmaterno', '$matricula')";
		//validando entrada			
			if ($enlace->query($sql) === TRUE)
			{
				header("location:.php");
			}		
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}
		mysqli_close($enlace);
	    clearstatcache();
	    
	}
	else
	{
		echo"Problema al insertar los datos.";
	}		
?>