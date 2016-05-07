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
	<div class="container">
	<div class="row search-bar">
		<div class="col-lg-8 col-lg-offset-2 search">
			
			<form action="peliculas.php" method="GET" class="form-horizontal search">
				<div class="form-group form-group-lg input-group">
					<input type="text" class="form-control" name="keywords"  aria-label="Buscar Pelicula" placeholder="Buscar Pelicula..." id="search">
					<div class="input-group-btn">
						<button type="submit" class="btn btn-lg" aria-expanded="false">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</div>
				</div><!-- /input-group -->
				<div id="livesearch"></div>
			</form>
		</div><!-- /.col-lg-6 -->		
	</div>
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
									<button type="button" class="btn btn-md comprar" value="<?php echo $_SESSION['ID_pelicula'];?>" aria-label="Left Align" onclick="addCar(this)">
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