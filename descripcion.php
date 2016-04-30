<?php 
		include("modules/Modules.php");
		session_start();
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
				<div class="media-left media-top" id=""><a href="#"><img class="media-object" src="images/Default.jpg" alt="Poster"></a></div>
				<div class="media-body ">
				<h3 class="media-heading">Movie Title</h3>
				<div id="info" class="container">
					<h4>Director</h4>
					<p>Juan</p>
					<h4>Categoria</h4>
					<p>A</p>
					<h4>Genero</h4>
					<p>Ficcion</p>	
				</div>
				<p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit aliquam, illum fugit magnam ea. Odio quia esse, tenetur excepturi quisquam amet repellendus adipisci cumque facilis, voluptas ratione, omnis perferendis tempore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			</div>
		</div>	
	</div>
		<div class="container">
			<div class="page-header">
				<h1>Comentarios</h1>
			</div>
			<div class="media">
				<div class="media-left media-top">
					<a href="#"><img class="media-object" src="http://lorempixel.com/g/64/64" alt="UsuarioPic"></a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Middle aligned media</h4>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="media">
				<div class="media-left media-top">
					<a href="#"><img class="media-object" src="http://lorempixel.com/g/64/64" alt="UsuarioPic"></a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Middle aligned media</h4>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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