<div class="container" id="bitacora">
	<form name="principal" method="get" action="#" >
		<input type="text" name="fecha" class="fechaHora" readonly>
		<input type="text" name="reloj" class="fechaHora" readonly>
		<div class="form-group">
		    <label for="descripcion" id="lb">Descripción</label>
	    	<textarea class="form-control" rows="3" id="descripcion" required></textarea>
	    	<input class="btn btn-primary btn-sm" type="submit" value="Enviar">
		</div>
	</form>
		<div class="table-responsive-md">
 			<table class="table table-hover">
 				<thead>
			    <tr>
			      <th scope="col">Fecha</th>
			      <th scope="col">Hora</th>
			      <th scope="col">Evento</th>
			      <th scope="col">Nombre Completo</th>
			    </tr>
			  </thead>

	<!--Ejemplo-->		  

			  <tbody>
			    <tr>
			      <th scope="row">22/04/2018</th>
			      <td>14:15</td>
			      <td>Ingresa personal de jardines</td>
			      <td>Juan Perez Inostroza</td>
			    </tr>
			    <tr>
			      <th scope="row">22/04/2018</th>
			      <td>15:07</td>
			      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			      tempor incididunt ut labore et dolore magna </td>
			      <td>Juan Perez Inostroza</td>
			    </tr>
			  </tbody>
  			</table>
 		</div>	


 		<div class="container" id="bitacora-admin">
 			<a class="btn btn-primary btn-sm" href="conserjeria-eventos.php" role="button" id="todos">Todos los eventos</a>
			<div class="group-a">
				<a href="#">Modificar</a>
				<a href="#">Eliminar</a>
			</div>
		</div>
</div>	
