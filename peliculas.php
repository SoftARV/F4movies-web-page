<?php 
		include("modules/Modules.php");
		//include("modules/Peliculas.php");
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
			<title>Peliculas F4Movies || '.$Titulo.'</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
			<link rel="stylesheet" type="text/css" href="css/style-main.css">
			<link rel="stylesheet" type="text/css" href="css/style-index.css">
			<link rel="stylesheet" type="text/css" href="css/style-peliculas.css">
</head>
<body>
<div class="container">
	<?php 
		echo Menu();
	?>
		
	<div class="row">
		<div class="col-lg-9 col-lg-offset-2">
			<div class="input-group">
				<div class="input-group-btn">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buscar	<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#">Todos</a></li>
						<li><a href="#">Genero</a></li>
						<li><a href="#">Otros</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<input type="text" class="form-control" aria-label="...">
				<div class="input-group-btn">
				<button type="button" class="btn btn-default" aria-label="Left Align">
				<span class="glyphicon glyphicon glyphicon-th" aria-hidden="true"></span>
				</button>

				<button type="button" class="btn btn-default" aria-label="Left Align">
				<span class="glyphicon glyphicon glyphicon-th-list" aria-hidden="true"></span>
				</button>

				</div>
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->		
	</div>


	<div class="row">		
		<div class="col-lg-2">
			<div>
				<div class="list-group">
					  <a href="#" class="list-group-item disabled">Categorias</a>
					  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
					  <a href="#" class="list-group-item">Morbi leo risus</a>
					  <a href="#" class="list-group-item disabled">Genero</a>
					  <a href="#" class="list-group-item">Vestibulum at eros</a>
				</div>
			</div>
		</div>
		
		<div class="col-lg-9" style="color: white;">
			<div class="media">
	  			<div class="media-left media-top"><a href="#"><img class="media-object" src="..." alt="..."></a></div>
	  			<div class="media-body">
	    		<h3 class="media-heading">Middle aligned media</h3>
	    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	  			</div>
			</div>
			<div class="media">
	  			<div class="media-left media-top"><a href="#"><img class="media-object" src="..." alt="..."></a></div>
	  			<div class="media-body">
	    		<h3 class="media-heading">Middle aligned media</h3>
	    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	  			</div>
			</div>
			<div class="media">
	  			<div class="media-left media-top"><a href="#"><img class="media-object" src="..." alt="..."></a></div>
	  			<div class="media-body">
	    		<h3 class="media-heading">Middle aligned media</h3>
	    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	  			</div>
			</div>

			<div class="row">
		  		<div class="col-sm-6 col-md-3 col-lg-4">
		    		<div class="thumbnail">
		      		<img src="..." alt="...">
		      			<div class="caption">
		        		<h3>Thumbnail label</h3>
		      			</div>
		    		</div>
		  		</div>
		  		<div class="col-sm-6 col-md-3 col-lg-4">
		    		<div class="thumbnail">
		      		<img src="..." alt="...">
		      			<div class="caption">
		        		<h3>Thumbnail label</h3>
		      			</div>
		    		</div>
		  		</div>
		  		<div class="col-sm-6 col-md-3 col-lg-4">
		    		<div class="thumbnail">
		      		<img src="..." alt="...">
		      			<div class="caption">
		        		<h3>Thumbnail label</h3>
		      			</div>
		    		</div>
		  		</div>
			</div>
			<div class="row">
		  		<div class="col-sm-6 col-md-3 col-lg-4">
		    		<div class="thumbnail">
		      		<img src="..." alt="...">
		      			<div class="caption">
		        		<h3>Thumbnail label</h3>
		      			</div>
		    		</div>
		  		</div>
		  		<div class="col-sm-6 col-md-3 col-lg-4">
		    		<div class="thumbnail">
		      		<img src="..." alt="...">
		      			<div class="caption">
		        		<h3>Thumbnail label</h3>
		      			</div>
		    		</div>
		  		</div>
		  		<div class="col-sm-6 col-md-3 col-lg-4">
		    		<div class="thumbnail">
		      		<img src="..." alt="...">
		      			<div class="caption">
		        		<h3>Thumbnail label</h3>
		      			</div>
		    		</div>
		  		</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-3 col-lg-4">
		    		<div class="thumbnail">
		      		<img src="..." alt="...">
		      			<div class="caption">
		        		<h3>Thumbnail label</h3>
		      			</div>
		    		</div>
		  		</div>
		  		<div class="col-sm-6 col-md-3 col-lg-4">
		    		<div class="thumbnail">
		      		<img src="..." alt="...">
		      			<div class="caption">
		        		<h3>Thumbnail label</h3>
		      			</div>
		    		</div>
		  		</div>
		  		<div class="col-sm-6 col-md-3 col-lg-4">
		    		<div class="thumbnail">
		      		<img src="..." alt="...">
		      			<div class="caption">
		        		<h3>Thumbnail label</h3>
		      			</div>
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