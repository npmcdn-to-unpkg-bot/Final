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
	<body ng-app="myApp" ng-controller="myCtrl">
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
										<form class="form-horizontal" role="form" name="forma_histori_clinica" method="post" action="../scripts/Paciente.php" enctype="multipart/form-data">
											<div id="accordion">
											    <div id="accordion-1"><h3>Paciente</h3>
												    <table class="table table-hover table-condensed table-bordered">
													    <tr>
														    <th for="inputNombre">Nombre</th>
														    <th for="inputApellido paterno">Apellido paterno</th>
														    <th for="inputApellido materno">Apellido materno</th>
													    </tr>
														<tr><!--renglon uno-->
															<th><input id="inputNombre" class="form-control" placeholder="Nombre" ng-model="nombre" required type="text" name="nombre"/></th>
															<th><input id="inputApellido paterno" class="form-control" placeholder="Apellido paterno" ng-model="appaterno" required type="text" name="appaterno"/></th>
															<th><input id="inputApellido materno" class="form-control" placeholder="Apellido materno" ng-model="apmaterno" required type="text" name="apmaterno" /></th>
															
														</tr>
														<tr><!--renlon dos-->
														    <th for="inputN&#250;mero de expedinte">N&#250;mero de expedinte</th>
															<th for="inputFecha de nacimiento" >Fecha de nacimiento</th>
															<th rowspan="2">
																<table class="table table-condensed">
																	<tr>
																		<th for="inputEdad">Edad</th>
																		<th for="inputTiempo">Tiempo</th>
																	</tr>
																	<tr>
																		<th>
																			<input id="inputEdad" class="form-control" placeholder="Edad" ng-model="edad" required type="text" name="edad"/>
																		</th>
																		<th>
																			<input id="inputTiempo" class="form-control" placeholder="(dia´s, mes(es) o a&#241;o´s)" ng-model="tiempoV" required type="text" name="tiempoV"/>																				
																		</th>
																	</tr>
																</table>
															</th>
														</tr>
														<tr><!--renlon tres-->
														    <th><input id="inputN&#250;mero de expedinte" class="form-control" placeholder="N&#250;mero de expedinte" ng-model="numero" required type="text" name="numero"/></th>
															<th>
															    <label label for="date"></label>
																<input id="inputFecha de nacimiento" class="form-control" ng-model="nacimiento" required id="date" type="date" name="nacimiento"> 
															</th>
														</tr>
														<tr>
														    <th colspan="2">
															    <table class="table table-hover table-condensed table-bordered">
																	<tr>
																		<th colspan="3">Adjuntar archivo
																		    <input id="Adjuntar_archivo" class="form-control" ng-model="archivo_fls" required type="file" name="archivo"/></br>
																		</th>
																	</tr> 
																</table>
															</th>
															<th colspan="2">
																<table class="table table-hover table-condensed table-bordered">
																	<tr>
																		<th colspan="3" for="inputG&#233;nero">G&#233;nero
																			<select id="inputG&#233;nero" class="form-control" placeholder="G&#233;nero" required type="text" name="sexo" ng-model="selectedName" ng-options="x for x in names">
																			</select>
																		</th>
																	</tr> 
																</table>
															</th>
														</tr>
													</table>	
												</div>
											    <div id="accordion-2"><h3>M&#233;dico</h3>
												    <table class="table table-hover table-condensed table-bordered">
														<tr>
															<th for="inputNombre">Nombre</th>
															<th for="inputApellido paterno">Apellido paterno</th>
															<th for="inputApellido materno">Apellido materno</th>
															<th for="inputMatr&#237;cula">Matr&#237;cula</th>
														</tr>
														<tr>
															<th><input id="inputNombre" class="form-control" placeholder="Nombre" ng-model="nombreMD" required type="text" name="nombreMD"/></th>
															<th><input id="inputApellido paterno" class="form-control" placeholder="Apellido paterno" ng-model="appaternoMD" required type="text" name="appaternoMD"/></th>
															<th><input id="inputApellido materno" class="form-control" placeholder="Apellido materno" ng-model="apmaternoMD" required type="text" name="apmaternoMD" /></th>
															<th><input id="inputMatr&#237;cula" class="form-control" placeholder="Matr&#237;cula" ng-model="matricula" required type="text" name="matricula"/></th>
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
																<input class="btn btn-default" type="submit" name="" value="Ingresar">
																<input class="btn btn-default" type="reset" value="Limpiar">
																<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle">
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
		<script>
		<!-- Menu Toggle Script -->
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");	
			});
			$(function(){//acordion
				$( "#accordion" ).accordion({
					collapsible:true
				});
			});
		//select y opciones
			var app = angular.module('myApp', []);
			app.controller('myCtrl', function($scope) {
				$scope.names = ["Masculino", "Femenino"];
			});
		</script>
	</body>
</html>