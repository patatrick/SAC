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
	<div class="container">
		<div class="row">
			<div class="col-12 ">
				<div id="respuesta" class="bg-danger p-3 text-white font-weight-bold text-center" style="font-size: larger;"><b></b></div>
				<h2 class="font-weight-bold text-center mb-5 bg-info p-4 text-white">Ingreso</h2>
			</div>
			<div class="col-12">
				<form class="form-group border mx-auto p-5 bg-light" method="POST" action="/xany/slim/public/index.php/api/login/" style="width: 320px;">
					<label for="nom">Nombre</label>
					<input type="text" id="nom" name="reg_nom" required />
					<label for="pss" class="pt-3">Contraseña</label>
					<input type="password" id="pss" name="reg_pss" required />
					<input type="submit" class="btn btn-primary mt-2" id="send" value="Enviar" />
				</form>
			</div>
		</div>
	</div>
	<footer class="container">
		<p class="text-center"><a href="index.php">Ir a la página principal</a></p>
	</footer>
	<script>
	 $(document).ready(function() {
	 	$('#respuesta').css('display', 'none');
	 });

	 $('#send').click(function(event) {
	 	event.preventDefault();
	 	var regexp = new RegExp('^[0-9a-zA-Z]+$');
	 	var nom = regexp.exec($('#nom').val());	
	 	if (nom == null) { 
	 		$('#respuesta').css('display', 'block');
		 	$('#respuesta b').html('Usuario o contraseña incorrecta');
	 		return false; 
	 	};

	 	var obj = {
	 		"reg_nom":$('#nom').val(),
	 		"reg_pss":$('#pss').val()
	 	};

	 		$.ajax({	
		 		url: '/xany/slim/public/index.php/api/login/',
		 		type: 'POST',
	 			data: obj
	 		})
	 		.done(function(info) {
	 			if (info.length > 200){
	 				location.replace('admin.php');
	 			}else {
		 			$('#respuesta').css('display', 'block');
		 			$('#respuesta b').html(info);
	 			}
	 		});
	 	
	 	});
	</script>
</body>
</html>