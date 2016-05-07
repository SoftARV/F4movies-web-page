<?php 
		session_start();
		if (!isset($_SESSION['usuario'])||($_SESSION['perfil']!=2))	
			{
				die(header("location: usuario.php"));
			}else{
				include("modules/modules.php");
			}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		echo Head("F4Movies || Informacion Usuario");
	?>
</head>
<body>
	<?php 
		echo Menu();
	?>
	<div class="container">	
	<br>
		<div class="row">		
			<div class="col-lg-2">
				<div>
					<div class="list-group">
						  <a class="list-group-item disabled">Usuario</a>
						  <a href="usuario.php" class="list-group-item">Compras realizadas</a>
						  <?php 
						  	if ($_SESSION['perfil'] == 2) {
						  		echo '<a class="list-group-item disabled">Panel administrativo</a>
						  		<a href="reporte.php" class="list-group-item">Reporte de usuarios</a>
						  		<a href="addmovie.php" class="list-group-item active">Agregar peliculas</a>';
						  	}
						   ?>
						  
					</div>
				</div>
			</div>
			<div class="col-lg-10">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Agregar una pelicula</h3>
					</div>
					<div class="panel-body">
						<form action="modules/addmovie.php" enctype="multipart/form-data" method="post"  class="form-horizontal">
						  <div class="form-group">
						    <label for="inputMovieN" class="col-md-2 control-label">Nombre</label>
						    <div class="col-md-4">
						      <input required type="text" class="form-control" name="nombre" placeholder="Nombre">
						    </div>
						    <label for="movieFilter" class="col-md-2 control-label">Categoria</label>
						    <div class="col-md-4">
						      <input required type="text" class="form-control" name="categoria" placeholder="Categoria">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="movieGender" class="col-md-2 control-label">Genero</label>
						    <div class="col-md-4">
						      <input required type="text" class="form-control" name="genero" placeholder="Genero">
						    </div>
						    <label for="bloc" class="col-md-2 control-label">Censura</label>
						    <div class="col-md-4">
						      <input required type="text" class="form-control" name="censura" placeholder="Censura">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="movieTimer" class="col-md-2 control-label">Duracion</label>
						    <div class="col-md-4">
						      <input required type="text" class="form-control" name="duracion" placeholder="00:00">
						    </div>
						    <label for="Descripcion" class="col-md-2 control-label">Descripcion</label>
						    <div class="col-md-4">
						      <input required type="text" class="form-control" name="descripcion" placeholder="Descripcion">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="urlVideo" class="col-md-2 control-label">Direccion del trailer</label>
						    <div class="col-md-4">
						      <input required type="url" class="form-control" name="linkvideo" placeholder="URL">
						    </div>
						    <label for="urlPoster" class="col-md-2 control-label">Poster</label>
						    <div class="col-md-4">
						      <input required type="file" class="form-control" accept="image/jpeg" name="poster" placeholder="URL">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="urlSite" class="col-md-2 control-label">Direccion del sitio</label>
						    <div class="col-md-4">
						      <input required type="url" class="form-control" name="linksitio" placeholder="URL">
						    </div>
						    <label for="Director" class="col-md-2 control-label">Director</label>
						    <div class="col-md-4">
						      <input required type="text" class="form-control" name="director" placeholder="Director">
						    </div>
						  </div>
						  <div class="form-group">

						   <label for="urlSite" class="col-md-2 control-label">Precio</label>
						    <div class="col-md-4">
						    <label class="sr-only" for="input"></label>
						    <div class="input-group">
						      <div class="input-group-addon">$</div>
						      <input required type="number" class="form-control" id="input" name="precio" placeholder="">
						      <div class="input-group-addon">.00</div>
						    </div>
						  	</div>
							    <div class="col-md-6">
							      <button type="submit" class="btn btn-success col-sm-offset-8">Agregar pelicula</button>
							    </div>
						  </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<footer>
	<?php 
		echo Footer();
	?>
</footer>
<?php echo imports(); ?>
</body>

</html>