<?php
    $enlace = mysqli_connect('localhost', 'root', ' ', 'laboratorio');

	if (!$enlace) 
	{
		die('Error de Conexi�n (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}

	echo '�xito... ' . mysqli_get_host_info($enlace) . "\n";
?>
