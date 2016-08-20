<?php
    $enlace = mysqli_connect('localhost', 'root', '', 'laboratorio');
			if (!$enlace) 
			{
				die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
			}
    $dato = ' ';
	//$dato = $_POST["dato"];
	if(isset($_POST['dato']))
	{
		$dato = $_POST['dato'];
	}
	// WHERE  nombre LIKE '%".$dato."%'
	$res=$enlace->query("SELECT * FROM `codigo`
	                LEFT JOIN Responsable ON Responsable.id = detalles.id 
					LEFT JOIN muestra ON muestra.id = detalles.id 
					LEFT JOIN caracteristicas ON caracteristicas.id = vivienda.id 
					WHERE datos.cedula = '$codigo'");
	   
	   
	   
	   
	while($fila=$res->fetch_assoc())
	{
		echo $fila["nombre"];
		
	}
?>