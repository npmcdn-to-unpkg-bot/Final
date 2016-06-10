<?php
	header('Content-Type: text/html; charset=utf8');
	$enlance = mysqli_connect("localhost", "root", "", "laboratorio");
	if(!$enlace)
	{
		die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
		return;
	}
	else
	{
		echo 'Éxito... ' . mysqli_get_host_info($enlace) . "\n";
	}
    mysqli_close($enlace);
	/*
	class foo_mysqli extends mysqli
	{
		public function __construct($host, $usuario, $contraseña, $bd) 
		{
			parent::__construct($host, $usuario, $contraseña, $bd);
			if (mysqli_connect_error()) 
			{
				die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
			}
		}
	}
	$bd = new foo_mysqli('localhost', 'mi_usuario', 'mi_contraseña', 'mi_bd');
	echo 'Éxito... ' . $bd->host_info . "\n";
	$bd->close();
	*/
?>
