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
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
		<script src="../rutinas/angular-1.5.8/angular.min.js"></script>
	    <title>Captura_de_Muestras_Medicas#</title>
	</head>
	<body ng-app="myApp">
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
							<a href="Quimico.php">Inicio</a>
						</li>
						<li>
							<a href="MuestrasII.php">Ingresar</a>
						</li>
						<li>
							<a href="ProcesoII.php">Proceso</a>
						</li>
						<li>
							<a href="BuscadorQ.php">B&#250squeda</a>
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
										<h3 class="panel-title">Muestra m&#233;dica</h3>
									</div>
								    <div class="panel-body">
									    <form class="form-horizontal" role="form" name="forma_Captura_Muestra" method="post" action="../scripts/Captura.php">
										    <div class="table-responsive">
											    <table class="table table-condensed table-bordered">
												    <tr>
													    <th colspan="2"><h2>Responsable</h2></th>
														<th rowspan="2">
															<table class="table table-bordered table-condensed">
																<tr>
																	<th for="inputFecha de toma">Fecha de toma</th>
																</tr>
																<tr>
																	<th><input id="inputFecha de toma" type="text" required name="fecha" class="form-control" placeholder="Fecha de toma" ng-model="fecha"/></th>
																</tr>
																<tr>
																	<th for="inputHora">Hora</th>
																</tr>
																<tr>
																	<th><input id="inputHora" type="text" required name="hora" class="form-control" placeholder="Hora" ng-model="hora"/></th>
																</tr>
															</table>
														</th>
													</tr>
													<tr>
														<th colspan="2">
														    <table class="table table-condensed table-bordered">
                                                                <tr>
																	<th for="inputNombre">Nombre</th>
																	<th for="inputApellido paterno">Apellido paterno</th>
																	<th for="inputApellido materno">Apellido materno</th>
																</tr>
																<tr>
																	<th><input id="inputNombre" type="text" required name="nombre" class="form-control" placeholder="Nombre" ng-model="nombre"/></th>
																	<th><input id="inputApellido paterno" type="text" required name="appaterno" class="form-control" placeholder="Apellido paterno" ng-model="appaterno"/></th>
																	<th><input id="inputApellido materno" type="text" required name="apmaterno" class="form-control" placeholder="Apellido materno" ng-model="apmaterno"/></th>
															</table>
														</th>
													</tr>
													<tr>
													<th colspan="2">
													    <table class="table table-bordered table-condensed">
														    <tr>
																<th >Observaciones</th>
															</tr>
															<tr>
																<th>
																	<textarea  type="text" required name="observ" class="form-control" ng-model="observ" cols="48" rows="4" wrap="virtual">
																	</textarea>
																</th>
															</tr>
															
													    </table>
													</th>
													<th colspan="2">
														<!--table class="table table-bordered table-condensed">
															<tr>
																<th>C&#243;digo</th>
															</tr>
															<tr>
																<th>C&#243;digo</th>
																<th>
																	<input type="button" class="btn btn-default" type="name" name="codigo"value="Generar">
																</th>
															</tr>
														</table-->
													</th>
												</tr>
													<tr>
													    <th colspan="2"><h2>Muestra</h2></th>
														
													</tr>
													<tr>
														<th colspan="4">
															<table class="table table-bordered table-condensed">
																<tr>
																	<th for="inputMuestra">Muestra</th>
																	<th for="inputContenedor">Contenedor</th>
																	<th for="inputTotal">Total</th>
																	<th rowspan="2">
																		<table class="table table-bordered table-condensed">
																			<tr>
																				<th for="inputUnidad de Medida">Unidad de Medida</th>
																				<th for="inputSufijo">Sufijo</th>
																			</tr>
																			<tr>
																				<th><input id="inputUnidad de Medida" type="text" required name="umedida" class="form-control" placeholder="Unidad de Medida" ng-model="umedida"/></th>
																				<th>	
																					<select type="text" required name="sufijo" class="form-control" placeholder="Sufijo" ng-model="sufijo">
																							<option value=""></option>
																							<option value="mcgranos">&#0181;g</option>
																							<option value="mg">mg</option>
																							<option value="g">g</option>
																							<option value="mcl">&#0181;l</option>
																							<option value="ml">ml</option>
																					</select>
																				</th>
																			</tr>
																		</table>
																	</th>
																</tr>
																<tr>
																	<th><input id="inputMuestra" type="text" required name="muestra" class="form-control" placeholder="Muestra" ng-model="muestra"/></th>
																	<th><input id="inputContenedor" type="text" required name="contenedor" class="form-control" placeholder="Contenedor" ng-model="contenedor"/></th>
																	<th><input id="inputTotal" type="text" required name="total" class="form-control" placeholder="Total" ng-model="total"/></th>
																</tr>
															</table>
														</th>
													</tr>
														<th colspan="4">
															<table class="table table-bordered table-condensed">
																<tr>
																	<th for="inputResguardo">Resguardo</th>
																	<th for="inputProtocolo">Protocolo</th>
																	<th for="inputAlmacenaje">Almacenaje</th>
																	<th for="inputFecha de la muestra">Fecha de la muestra</th>
																</tr>
																<tr>
																	<th><input id="inputResguardo" type="text" required name="resguardo" class="form-control" placeholder="Resguardo" ng-model="resguardo"/></th>
																	<th><input id="inputProtocolo" type="text" required name="protocolo" class="form-control" placeholder="Protocolo" ng-model="protocolo"/></th>
																	<th><input id="inputAlmacenaje" type="text" required name="almacen"  class="form-control" placeholder="Almacenaje" ng-model="almacen"/></th>
																	<th>
																		<label label for="date"></label>
																		<input id="date" type="date" required name="fechaR" class="form-control" ng-model="" class="form-control" ng-model="fechaR"/> 
																	</th>
																</tr>
															</table>
														</th>
													</tr>
													<tr> 
														<th colspan="2">La fecha actual es:
															<?php 
																echo date("d/M/Y");
															?>
														</th>
														<th colspan="2">Hora:
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
										    </div>
										</form>
										<?php
											if(isset($_POST['submit']))
											{
												require("../scripts/Captura.php");
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
		<script src="../js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
		<!-- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
	</body>
</html>