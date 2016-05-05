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
	<div class="row">
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
				<div class="media-left media-top poster" ><a href="#">
					<?php echo '<img class="media-object poster" src="'.$_SESSION['link_imagen'].'" alt="Poster">'; ?>
				</a></div>
				<div class="media-body ">
					<h3 class="media-heading"><?php echo $_SESSION['nombre'] ?></h3>
					<div id="info" class="container">
						<h4>Director</h4>
						<p><?php echo $_SESSION['director'] ?></p>
						<h4>Categoria</h4>
						<p><?php echo $_SESSION['categoria'] ?></p>
						<h4>Genero</h4>
						<p><?php echo $_SESSION['genero'] ?></p>
						<h4>Duracion</h4>
						<p><?php echo $_SESSION['duracion'] ?></p>
						<h4>Precio</h4>
						<p><?php echo $_SESSION['precio'] ?></p>
					</div>
					<a href="descripcion.php?pelicula='.$row['ID_pelicula'].'"><button type="button" class="btn btn-default" value="'.$row['ID_pelicula'].'" aria-label="Left Align">
  							<span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Comprar
						</button></a>
					<p class="descripcion"><?php echo $_SESSION['descripcion'] ?></p>
				</div>
			</div>
		</div>	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
					
			</div>
			<div class="col-lg-6">
				<div class="embed-responsive embed-responsive-4by3">
					<?php echo '<iframe class="embed-responsive-item" src="'.$_SESSION['link_video'].'"></iframe>'; ?>
				</div>		
			</div>
		</div>
		
		<div class="page-header">
			<h1>Comentarios</h1>
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