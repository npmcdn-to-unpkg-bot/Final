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
	    <script src="../rutinas/angular-1.5.8/angular.min.js"></script>
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
							<a href="Historial.php">Historial</a>
						</li>
						</li>
						<li>
							<a href="BuscadorM.php">B&#250;squeda</a>
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
										<form class="form-horizontal" role="form" name="formaH" method="post"  action="./scripts/Paciente.php" enctype="multipart/form-data">
											<table class="table table-hover table-condensed table-border">
											    <tr>
												    <th colspan="3"><h3>Paciente</h3></th>
													<th></th>
													
												</tr> 
												<tr>
													<th for="inputNombre">Nombre</th>
													<th for="inputApellido paterno">Apellido paterno</th>
													<th for="inputApellido materno">Apellido materno</th>
													
												</tr>
														
												<tr><!--renglon uno-->
													<th><input id="inputNombre" type="text" class="form-control" placeholder="Nombre" name="nombreU" ng-model="usuario.nombre" required name="nombre"/></th></th>
													<th><input id="inputApellido paterno" type="text" class="form-control" placeholder="Apellido paterno" name="appaternoU" ng-model="usuario.appaterno" required name="appaterno"/></th>
													<th><input id="inputApellido materno" type="text" class="form-control" placeholder="Apellido materno" name="apmaternoU" ng-model="usuario.apmaterno" required name="apmaterno"/></th>
													
												</tr>
												<tr><!--renlon dos-->
													<th for="inputN&#250;mero de expedinte">N&#250;mero de expedinte</th>
													<th for="inputFecha de nacimiento" >Fecha de nacimiento</th>
													<th rowspan="2" for="inputEdad">Edad
														<table class="table table-hover table-condensed table-bordered">
															<tr>
																<th><input id="inputEdad" class="form-control" placeholder="Edad" name="edad" ng-model="usuario.edad" required type="text"/></th>
																<th for="inputTiempo">
																	<select class="form-control" name="tiempo" ng-model="usuario.tiempo" required type="text">
																		<option value="">Tiempo</option>
																		<option value="Dias">Dias</option>
																		<option value="Semanas">Semanas</option>
																		<option value="Meses">Meses</option>
																		<option value="Años">A&#241;os</option>
																	</select>
																</th>
															</tr>
														</table>
													</th>
												</tr>
												<tr><!--renlon tres-->
												<th><input id="inputN&#250;mero de expedinte" class="form-control" placeholder="N&#250;mero de expedinte" name="numero" ng-model="usuario.numero" required type="text"/></th>
													<th>
														<label label for="date"></label>
														<input id="inputFecha de nacimiento" class="form-control" name="nacimiento" ng-model="usuario.nacimiento" required id="date" type="date" > 
													</th>
												</tr>
										         
												<tr>
													<th colspan="2">
														<table class="table table-hover table-condensed table-bordered">
															<tr>
																<th colspan="3" for="inputAdjuntar archivo">Adjuntar archivo
																	<input id="inputAdjuntar archivo" class="form-control" name="nombre_archivo_cliente" ng-model="usuario.nombre_archivo_cliente" required type="file"/></br>
																</th>
															</tr> 
														</table>
													</th>
													<th colspan="2">
														<table class="table table-hover table-condensed table-bordered">
															<tr>
																<th colspan="3" for="inputG&#233;nero">G&#233;nero
																	<select id="inputG&#233;nero" class="form-control" placeholder="" name="sexo" ng-model="usuario.sexo" required  type="text"/>
																			<option value="Genero">G&#233;nero</option>
																			<option value="Masculino">Masculino</option>
																			<option value="Femenino">Femenino</option>
																	</select>
																</th>
															</tr> 
														</table>
													</th>
												</tr>
												<tr>
												    <th colspan="4"><h3>M&#233;dico</h3></th>
												</tr>
												<tr>
													<th for="inputNombre">Nombre</th>
													<th for="inputApellido paterno">Apellido paterno</th>
													<th for="inputApellido materno">Apellido materno</th>
													<th for="inputMatr&#237;cula">Matr&#237;cula</th>
												</tr>
												<tr>
													<th><input id="inputNombre" class="form-control" placeholder="Nombre" name="nombre" ng-model="usuario.nombre" required type="text" name="nombre"/></th>
													<th><input id="inputApellido paterno" class="form-control" placeholder="Apellido paterno" name="appaterno" ng-model="usuario.appaterno" required type="text"/></th>
													<th><input id="inputApellido materno" class="form-control" placeholder="Apellido materno" name="apmaterno" ng-model="usuario.apmaterno" required type="text"/></th>
													<th><input id="inputMatr&#237;cula" class="form-control" placeholder="Matr&#237;cula" name="matricula" ng-model="usuario.matricula" required type="text"/></th>
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
												<tr>
													<th colspan="4">
														<input class="btn btn-default" type="submit" value="Ingresar">
														<input class="btn btn-default" type="reset" value="Limpiar">
														<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle">
													</th>
												</tr>
												
											</table>
										</form> 
										<?php
											if(isset($_POST['submit']))
											{
												require("../scripts/Paciente.php");
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