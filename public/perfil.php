<?php 
    session_start();
    if (isset ($_SESSION['nom'])) {}
    else {header('location: login.php');}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	    <link rel="stylesheet" href="/lib/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/lib/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="/lib/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/lib/css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="/lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="/lib/css/bootstrap.min.css.map">

    <script src="/lib/js/jquery-3.3.1.min.js"></script>
    <script src="/lib/js/jquery-3.3.1.min.map" type="application/json"></script>
    <script src="/lib/js/popper.min.js"></script>
    <script src="/lib/js/popper.min.js.map" type="application/json"></script>
    <script src="/lib/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/js/bootstrap.bundle.min.js.map"  type="application/json"></script>
    <script src="/lib/js/bootstrap.min.js"></script>
    <script src="/lib/js/bootstrap.min.js.map"  type="application/json"></script>
</head>
<body>
			<header class="container col-12 col-md-8 bg-info p-2">
				<h3 class="h3 text-center text-white">Mi Perfil</h3>
			</header>
	<div class="container col-md-8">
		<div class="row">
			<div class="col-12 col-sm-6">
				<form>
					<table class="my-5 font-weight-bold" align="center">
						<tr><td><label>Nombre:</label></td>
							<td><label id="nombre">Alejandrina</label></td></tr>
						<tr><td><label class="pr-5">Password:</label></td>
							<td><label id="password">1234</label></td></tr>
					</table>
				</form>
			</div>
			<div class="col-12 col-sm-6">
				<form>
				  <table class="mb-2 mt-sm-5" align="center">	
					<tr><td  class="pb-3" colspan="2"><b>Cambio de contraseña</b></td></tr>
					<tr>
					  <td><label for="pass">Nueva</label></td>
					  <td><input type="password" id="pass" class="form-group mx-2" size="12" /></td>
					</tr>
					<tr>
					  <td><label for="passc">Confirme</label></td>
					  <td><input type="password" id="passc" class="form-group mx-2" size="12" /></td>
					</tr>
				  </table>
				</form>
			</div>
		</div>	
	</div>
	<footer class="container">
		<p class="text-center"><a href="admin.php">Volver</a></p>
	</footer>

	<!-- load JS files -->
        
        <script src="js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="js/jquery.sticky.js"></script> 
        <script src="js/funciones.js"></script> 
        <script src="js/ajax.js"></script> 
</body>
</html>