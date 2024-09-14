<!doctype html>
<html lang="es">
	<head>
		<title>Todos los eventos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!-- Bootstrap CSS -->
  		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<script src="javascript/funciones.js"></script>

	</head>
	<body class="homepage" id="PAT">
		<div id="page-wrapper" class="ADMIN">

			<!-- Header -->
			
			<div id="header-wrapper">
					<header class="container">				
						<div id="logo">
								<a href="index.php"><img src="images/SAC.png" height="60px"></a>		
						</div>
						<!-- Nav -->
						<div class="container" id="admin-nav">
							<nav id="nav">
								<?php include 'include/headeradmin.php'; ?>
							</nav>
						</div>
					</header>
					
					<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container"><img src="images/Cumbres.png" />
						<div class="row" id=row1>
							<div class="7u 12u(medium)">
								<h2><b>Bitácora</b></h2>
								<p>Registro de todas las novedades ocurridas durante el día.</p>						
							</div>
						</div>
					</div>
				</div>
			
<!-- CUERPO -->
			
				<div id="features-wrapper">
					<?php include 'submenus/conserjeria/todos-los-eventos.php'; ?>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<?php include 'include/footer.php';?> 
					</footer>
				</div>
			</div>
		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>
