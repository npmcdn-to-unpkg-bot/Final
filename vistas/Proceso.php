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
	    <title>Proceso#</title>
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
							<a href="Quimico.php">Inicio</a>
						</li>
						<li>
							<a href="Muestras.php">Ingresar</a>
						</li>
						<li>
							<a href="Proceso.php">Proceso</a>
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
										<form class="form-horizontal"  method="post"  action="registrodos.php" enctype="multipart/form-data">
											<table class="table table-hover table-condensed table-bordered">
											    <tr>
												    <th>C&#243;digo de la muestra</th>
												    <th>Muestra original</th>
												    <th>Proceso</th>
											    </tr>
												<tr>
												    <th><input type="name" name="codigo"/></th>
												    <th><input type="name" name="muestraO"/></th>
												    <th><input type="name" name="muestraR"/></th>
											    </tr>
												<tr>
												    <th rowspan="2">
														<table class="table table-condensed table-bordered">
															<tr>
																<th colspan="2">Unidad de Medida</th>
															</tr>
															<tr>
																<th><input type="name" name="umedida"/></th>
																<th>	
																	<select type="name" name="sufijo">
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
													<th>Total de muestras procesadas</th>
													<th>Almacenaje</th>
												</tr>
												<tr>
												    <th><input type="name" name="total"/></th>
													<th><input type="name" name="almacen"/></th>
											    </tr>
												<tr> 
												    <th>Fecha </th>
													<th>Protocolo</th>
													<th>Cuantificaci&#243;n</th>
												</tr>
												<tr>
													
													<th>
													    <?php 
															echo date("d/M/Y");
														?>
														<!--label label for="date"></label>
														<input id="date" type="date" name="fechaI"size="5"--> 
													</th>
													<th><input type="name" name="protocolo"/></th>
													<th><input type="name" name="cuantificacion"/></th>
												</tr>
												<tr>
													<th colspan="2">
														<table class="table table-condensed">
															<tr>
																<th colspan="2">C&#243;digo</th>
															</tr>
															<tr>
																<th>C&#243;digo</th>
																<th>
																	<input type="button" class="btn btn-default" type="name" name="codigoDos"value="Generar">
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
													<th>Hora:
														<?php 
															echo date("g:i a");
														?>
													</th>
												</tr>
												<tr>
												    <th colspan="3">
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
												require("registrodos.php");
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