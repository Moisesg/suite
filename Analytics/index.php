<!DOCTYPE html>
<html lang="es">
<html>
<head>
<title>Analytics</title>
<link rel="stylesheet" type="text/css" href="../bst/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container">
	<h2>Analytics</h2>
	<span>A continuacion se muestra la actividad de los usuarios.</span>
	<div class="row grafico">Grafica</div>
	<?php
		include ('../includes/clases.php');
		$suite = new suite();
		$suite->conectar();
	?>
	<div class="row">
		<div class=" col-md-6 ">
		<h3 align="center">Ultimos usuarios registrados</h3>
			<ol>
				<?php $suite->getUsuarios(5,1); ?>
			</ol>
		</div>

		<div class=" col-md-6 ">
			<h3 align="center">10 usuarios con mas descargas</h3>
				<ol>
					<?php $suite->getCantidadDescargas(); ?>
				</ol>
		</div>		 

	</div>
	
	<div class="row">
		<p align="right"> <input class="btn btn-md btn-success" value="Ver todo..." />  </p>
	</div>
	
	<div class="row otrosDatos ">
		<ul >
			<li >Total Usuarios registrados: </li>
			<li><?php echo $resultado = $suite->getTotalUsuariosRegistrados(); ?> </li>
			<li>Usuarios registrados semanalmente: </li>
			<li>&nbsp;</li>
			<li>Total usuarios registrados: </li>
			<li>&nbsp; </li>			
		</ul>
		<ul class="info">
			<li>Descargas:por semana: </li>
			<li>
			<?php 
				echo date(time())."<br>".date(time(strtotime('-1 day')));
			?>
</li>
			<li>Descargas:por mes: </li>
			<li>553</li>
			<li>Total Descargas: </li>
			<li> </li>		
		</ul>
	</div>

	<hr>

	<div class="footer">
        <p>&copy; analytic suite</p>
	</div>

</div>

</body>
</html>