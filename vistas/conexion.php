<?php
	header('Content-Type: text/html; charset=utf8');
	$enlance = mysqli_connect("localhost", "root", "", "laboratorio");
	if(!$enlace)
	{
		die('Error de Conexi�n (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
		return;
	}
	else
	{
		echo '�xito... ' . mysqli_get_host_info($enlace) . "\n";
	}
    mysqli_close($enlace);
	/*
	class foo_mysqli extends mysqli
	{
		public function __construct($host, $usuario, $contrase�a, $bd) 
		{
			parent::__construct($host, $usuario, $contrase�a, $bd);
			if (mysqli_connect_error()) 
			{
				die('Error de Conexi�n (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
			}
		}
	}
	$bd = new foo_mysqli('localhost', 'mi_usuario', 'mi_contrase�a', 'mi_bd');
	echo '�xito... ' . $bd->host_info . "\n";
	$bd->close();
	*/
?>
