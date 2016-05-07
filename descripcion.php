<?php 
		include("modules/modules.php");
		include("modules/descripcion.php");
		session_start();
		$id_pelicula = $_GET['pelicula'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		echo Head("F4Movies || Nombre Pelicula");
	?>
	<link rel="stylesheet" type="text/css" href="css/style-descripcion.css">
</head>
<body>
	<?php 
		echo Menu();
		pelicula($id_pelicula);
	?>
	<div class="row search-bar">
		<div class="col-lg-9 col-lg-offset-2">
			<div class="input-group">
				<div class="input-group-btn">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buscar<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#">Todos</a></li>
						<li><a href="#">Genero</a></li>
						<li><a href="#">Otros</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<input type="text" class="form-control" aria-label="..." id="search">
				<div id="livesearch"></div>
				<div class="input-group-btn">
					<button type="button" class="btn btn-default" aria-label="Grid View">
						<span class="glyphicon glyphicon glyphicon-th" id="grid-view" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default" aria-label="List View">
						<span class="glyphicon glyphicon glyphicon-th-list" id="list-view" aria-hidden="true"></span>
					</button>
				</div>
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->		
	</div>
	<div class="container">
		<div class="media">
			<div id="movies">
				<div class="panel">
					<div class="row ">
						<div class="col-lg-3 col-lg-offset-1">
							<?php echo '<img class="img-rounded poster" src="'.$_SESSION['link_imagen'].'" alt="Poster">'; ?>		
						</div>
						<div class="col-lg-8">
							<h1><?php echo $_SESSION['nombre'] ?></h1>
							<div class="row">
								<div class="col-lg-2">
									<h3>Director</h3>
									<p><?php echo $_SESSION['director'] ?></p>	
								</div>
								<div class="col-lg-2">
									<h3>Categoria</h3>
									<p><?php echo $_SESSION['categoria'] ?></p>	
								</div>
								<div class="col-lg-2">
									<h3>Genero</h3>
									<p><?php echo $_SESSION['genero'] ?></p>	
								</div>
							</div>
							<div class="row">
								<div class="col-lg-2">
									<h3>Duración</h3>
									<p><?php echo $_SESSION['duracion'] ?> </p>	
								</div>
								<div class="col-lg-2 col-lg-offset-4">
									<h2>Precio
									<?php echo $_SESSION['precio'] ?>BsF
									</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-offset-6 col-lg-2">
									<button type="button" class="btn btn-default" value="<?php echo $_SESSION['ID_pelicula'];?>" aria-label="Left Align" 
									onclick="addCar(this)">
  									<span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Comprar</button>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="panel">
					<div class="row">
						<div class="col-lg-4 col-lg-offset-1">
							<h1>Sinopsis</h1>
							<p class="descripcion"><?php echo $_SESSION['descripcion']?></p>
						</div>
						<div class="col-lg-6">
							<div class="embed-responsive embed-responsive-4by3">
							<?php echo '<iframe class="embed-responsive-item" src="'.$_SESSION['link_video'].'"></iframe>'; ?>
							</div>		
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