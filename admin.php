<?php 
		include("modules/modules.php");
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		echo Head("F4Movies || Informacion Admin");
	?>
</head>
<body>
	<?php 
		echo Menu();
	?>

	<div class="container">
		<div class="jumbotron">
		  <h1>Bienvenido Usuario!</h1>
		  <p>Datos del usuario</p>
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
			<div class="col-lg-10">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
						Panel content
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