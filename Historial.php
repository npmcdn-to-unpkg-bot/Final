<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet"href="../css/normalize.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="../css/simple-sidebar.css">
	    <link rel="stylesheet" href="../css/Style.css">
	    <title>Historial#</title>
	</head>
	<body>
	    <header>
			<div class="container">

			</div>
		</header>
	    <div class="container-fluid">  
			<div id="wrapper">
				<!-- Sidebar -->
				<div id="sidebar-wrapper">
					<ul class="sidebar-nav">
						<li class="sidebar-brand">
							<a href="#">
								Men&#250
							</a>
						</li>
						<li>
							<a href="Medico.php">Inicio</a>
						</li>
						<li>
							<a href="Historial.html">Historial</a>
						</li>
						</li>
						<li>
							<a href="Buscador.html">B&#250;squeda</a>
						</li>
						<li>
							<a href="">Copyright</a>
						</li>
						<li>
							<a href=""></a>
						</li>
						
					</ul>
				</div>
				<!-- /#sidebar-wrapper -->
				<!-- Page Content -->
				<div id="page-content-wrapper">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Historial m&#233;dico</h3>
									</div>
									<div class="panel-body">
										<form class="form-horizontal"  method="post"  action="php/.php" enctype="multipart/form-data">
											<div id="accordion">
											    
												<div id="accordion-2"><h3>M&#233;dico</h3>
												    <table class="table table-hover table-condensed table-bordered">
														<tr>
															<th>Nombre</th>
															<th>Apellido paterno</th>
															<th>Apellido materno</th>
															<th>Matr&#237;cula</th>
														</tr>
														<tr>
															<th><input type="name" name="nombre"/> </th>
															<th><input type="name" name="appaterno"/></th>
															<th><input type="name" name="apmaterno" /></th>
															<th><input type="name" name="matricula"/></th>
														</tr>
														
													</table>
												</div>
												
											    <div id="accordion-1"><h3>Paciente</h3>
												    <table class="table table-hover table-condensed table-bordered">
													    <tr>
														    <th>Nombre</th>
														    <th>Apellido paterno</th>
														    <th>Apellido materno</th>
														    
													    </tr>
														
														<tr><!--renglon uno-->
															<th><input type="name" name="nombre"/></th>
															<th><input type="name" name="appaterno"/></th>
															<th><input type="name" name="apmaterno" /></th>
															
														</tr>
														<tr><!--renlon dos-->
														    <th>N&#250;mero de expedinte</th>
															<th>Fecha de nacimiento</th>
															<th rowspan="3">Edad
															    <table class="table table-hover table-condensed table-bordered">
																	<tr>
																		<th>D&#237;a</th><th><input type="name" name="dia"/></th>
																	</tr>
																	<tr>
																		<th>Mes</th><th><input type="name" name="mes"/></th>
																	</tr>
																	<tr>
																		<th>A&#241;o</th><th><input type="name" name="anyo"/></th>
																	</tr>
																	<th colspan="2">
																		<table class="table table-hover table-condensed table-bordered">
																			<tr>
																				<th colspan="3">Sexo
																					<select type="name" name="sexo">
																							<option value="Genero">G&#233;nero</option>
																							<option value="Masculino">Masculino</option>
																							<option value="Femenino">Femenino</option>
																					</select>
																				</th>
																			</tr> 
																		</table>
																	</th>
																</table>
															</th>
															
														</tr>
														<tr><!--renlon tres-->
														<th><input type="name" name="numero"/></th>
															<th>
															    <label label for="date"></label>
																<input id="date" type="date" name="nacimiento"> 
															</th>
														</tr>
														
														<tr>
														    <th colspan="2">
															    <table class="table table-hover table-condensed table-bordered">
																	<tr>
																		<th colspan="3">Adjuntar archivo
																		    <input type="file" name="nombre_archivo_cliente"/></br>
																		</th>
																	</tr> 
																</table>
															</th>
															
														</tr>
													</table>	
													<table class="table table-hover table-condensed table-bordered">
														<tr>
															<th colspan="4">
																<input type="button" class="btn btn-default" type="submit" value="Ingresar">
																<input type="button" class="btn btn-default" type="reset" value="Limpiar">
																<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle">
															</th>
														</tr>
														
														<tr> 
															<th colspan="3">La fecha actual es:
																<?php 
																	echo date("d/M/Y");
																?>
															</th>
															<th>Hora:
																<?php 
																	echo date("g:i a");
																?>
															</th>
														</tr>
														
													</table>	
												</div>
											    
											    <!--div id="accordion-3"><h3></h3></div-->
											 </div>
										</form> 
										<?php
											if(isset($_POST['submit']))
											{
												require("");
											}
											clearstatcache();
										?>
									</div>
								</div>
								
							</div>
						</div>
					</div>
			    </div>
				<footer>
					<div class="container">
					<p><h3></h3></p>
					<p><h3></h3></p><a style="color:#FFF;"></a>
					</div>
				</footer>
				<!-- /#page-content-wrapper -->
			</div>	
			
		</div>
		<script src="../js/jquery-ui.js"></script>
		<script src="../js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
		<!-- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
			$(function(){//acordion
				$( "#accordion" ).accordion({
					collapsible:true
				});
			});
		</script>
	</body>
</html>