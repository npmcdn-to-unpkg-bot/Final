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
	    <title>Proceso#</title>
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
							<a href="BuscadorQ.php">B&#250;squeda</a>
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
										<h3 class="panel-title">Proceso</h3>
									</div>
									<div class="panel-body">
										<form class="form-horizontal" role="form" name="forma_proceso" method="post"  action="../scripts/registrodos.php" enctype="multipart/form-data">
											<table class="table table-condensed table-bordered">	
												<tr>
												    <th for="inputFolio de la muestra">Folio de la muestra</th>
												    <th for="inputProtocolo">Protocolo</th>
												    <th for="input">Tipo de muestra</th>
											    </tr>
												<tr>
												    <th><input id="inputFolio de la muestra" type="text" class="form-control" placeholder="Folio de la muestra" name="folio" ng-model="folio" required /></th>
												    <th><input id="inputProtocolo" type="text" class="form-control" placeholder="Protocolo" name="protocolo" ng-model="protocolo" required /></th>
												    <th><input id="inputTipo de muestra" type="text" class="form-control" placeholder="Tipo de muestra" name="tipomuestra" ng-model="tipomuestra" required /></th>
											    </tr>
												<tr>
												    <th>
													    <table class="table table-condensed table-bordered">
															<tr>
																<th for="inputEnsayo">Ensayo</th>
															</tr>
															<tr>
																<th><input id="inputEnsayo" type="text" class="form-control" placeholder="Ensayo" name="ensayo" ng-model="ensayo" required /></th>
															</tr>
															<tr>
																<th for="inputFecha de proceso">Fecha de proceso</th>
															</tr>
															<tr>
																<th><input id="inputFecha de proceso" type="text" class="form-control" placeholder="Fecha de proceso" name="fechaP" ng-model="fechaP" required /></th>
															</tr>
															<tr>
																<th for="inputResultado">Resultado</th>
															</tr>
															<tr>
																<th><input id="inputResultado" type="text" class="form-control" placeholder="Resultado" name="resultado" ng-model="resultado" required /></th>
															</tr>
														</table>	
													</th>
												    <th colspan="2" >Qu&#237;mico analista
													    <table class="table table-condensed table-bordered">
														    <tr>
																<th for="inputNombre">Nombre</th>
																<th for="inputApellido paterno">Apellido paterno</th>
																<th for="inputApellido materno">Apellido materno</th>
															</tr>
															<tr>
																<th><input id="inputNombre" type="text" class="form-control" placeholder="Nombre" name="nombre" ng-model="nombre" required /></th>
																<th><input id="inputApellido paterno" type="text" class="form-control" placeholder="Apellido paterno" name="appaterno" ng-model="appaterno" required /></th>
																<th><input id="inputApellido materno" type="text" class="form-control" placeholder="Apellido materno" name="apmaterno" ng-model="apmaterno" required /></th>
															</tr>
															<tr>
																<th colspan="3">Observaciones</th>
															</tr>
															<tr>
																<th colspan="3">
																    <textarea type="text" class="form-control" ng-model="observ" required name="observ"  cols="50" rows="4" wrap="virtual">
																	</textarea>
																</th>
															</tr>
															
														</table>
													</th>
											    </tr>

												<tr>
												    <th>La fecha actual es:
													    <?php 
															echo date("d/M/Y");
														?>
													</th>
													<th>
														Hora:
														<?php 
															echo date("g:i a");
														?>
													</th>
												    <th colspan="2" rowspan="2">
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
												require("../scripts/registrodos.php");
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