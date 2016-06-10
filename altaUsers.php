<?php
	/*Declarando variables*/
	$nombre = $_POST['nombre'];
	$apaterno = $_POST['apaterno'];
	$apmaterno = $_POST['apmaterno'];
	$clave = $_POST['matricula'];
	$nusuario =  $_POST['nusuario'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];
	$tusuario = $_POST['tusuario'];
	$alta = $_POST['alta'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	/*Fin de variables*/
	/**/
	$reqlen = strlen($nombre) * strlen($apaterno)* strlen($apmaterno) * strlen($clave) * 
			  strlen($nusuario) * strlen($pass) * strlen($rpass) * strlen($tusuario) * 
			  strlen($alta) * strlen($email) * strlen($tel);
	/**/
	/*Bloque para validar*/
	if($reqlen > 0)//El valor del arreglo debe ser mayor a cero
	{
		$consulta = "SELECT * FROM `usuario`";//haciendo una consulta a la bd
		$verificar_nombre = 0;
		if($resultado = mysqli_query($enlance, $consulta))
		 {
			 /*Obtener el array asociativo*/
			 while($obj = mysqli_fetch_object($resultado))
			 {
				if()
				{
					printf("%s (%s)\n", $obj->usuario);
				}
			 }
			 
			/*liberar el conjunto de resultados*/
			 mysqli_free_result($resultado);
		 }
	}
	/**/
	/*Fin de bloque*/
		

	
		$sql = 'SELECT * FROM usuario';
		$rec = mysqli_query($sql);
		$verificar_nombre = 0;
		while($result = mysql_fetch_object($rec))
		{
			if($result-> == $_POST['nusuario'])
			{
				$verificar_nombre = 1;
				echo "El  usuario ya existe.";
			}	
		}	
		$sql = 'SELECT * FROM rusuario';
		$rec = mysqli_query($sql);
		$verificar_nusuario = 0;
		while($resultado = mysql_fetch_object($rec))
		{
			if($resultado->nusuario == $_POST['nusuario'])
			{
				$verificar_nusuario = 1;
				echo "El nombre de usuario ya existe.";
			}
		}
		if($pass === $rpass)
		{
			$pass = md5($pass);
			$rpass = md5($rpass);
			/*INSERT INTO table_name (column1, column2, column3,...)
              VALUES (value1, value2, value3,...)*/
			$sql1 = "INSERT INTO usuario (idusuario, nombre, appaterno, apmaterno, clave)
                     VALUES (' ','$nombre', '$appaterno', '$apmaterno', '$clave')";
					 mysqli_query($sql);
			if ($enlace->query($sql1) === TRUE)
			{
				echo"Datos ingresados correctamente." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql1 . "<br>" . $enlace->error;
			}
			$sql = "INSERT INTO rusuario (id_rusuario, tusuario, nusuario, pass, rpass, alta, email, tel, usuario_idusuario)
                    VALUES (' ', '$tusuario', ' $nusuario', '$pass', '$rpass', '$alta', '$email', '$tel', '$id')";
					mysqli_query($sql);
	        if ($enlace->query($sql) === TRUE)
			{
				echo"Datos ingresados correctamente." . "<br>";
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}
		}	
		else
		{
			echo 'Porfavor vuelva ingresar la contrase&#241;a';
		}
	
	else
	{
		/*Aprueba de errores*/
		$errors = array();
		if(strlen['$nombre'] < 2)
		{
			$errors[] = "Te has olvidado del nombre.";
		}
		elseif(strlen($appaterno) < 2)
		{
			$errors[] = "Falta el apellido paterno.";
		}
		elseif(strlen($apmaterno) < 2)
		{
            $errors[] = "Falta el apellido matreno.";
		}
		elseif(strlen($clave) < 2)
		{
			$errors[] = "Te has olvidado de la clave.";
		}
		elseif(strlen($nusuario) < 2)
		{
			$errors[] = "El nombre debe de tener mas de dos letras.";
		}
		elseif(strlen($pass) < 2)
		{
			$errors[] = "La contrase&#241;a tener mas de dos letras.";
		}
		elseif(strlen($rpass) < 2)
		{
			$errors[] = "La contrase&#241;a debe de tener mas de dos letras.";
		}
		elseif(strlen($$alta) < 2)
		{
			$errors[] = "La fecha no esta complata.";
		}
		elseif(strlen($email) < 2)
		{
			$errors[] = "El correo debe de tener mas de dos letras.";
		}
		elseif(strlen($tel) < 2)
		{
			$errors[] = "El telefono debe de tener mas de dos numeros.";
		}
		elseif($errors)
		{
			$errortext = "";
			foreach($errors as $error)
			{
				$errortext .= "<li>".$error."</li>";
			}
			die("<span class='failure'>Ocurrieron los siguientes errores:<ul>". $errortext ."</ul></span>");
		}
		/*Fin de prueba de errores*/
		echo"Problema al insertar los datos.";
	}
	mysqli_close($enlace);
	clearstatcache();
?>