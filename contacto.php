<?php 
		include("modules/modules.php");
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		echo Head("Contacto || F4Movies");
	?>
</head>
<body>
	<?php 
		echo Menu();
	?>

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				<form class="form-inline">
					<div class="form-group">
						<label class="sr-only" for="exampleInputEmail3">Nombre</label>
						<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
					</div>
					<div class="form-group">
						<label class="sr-only" for="exampleInputPassword3">Apellido</label>
						<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-default">Enviar Mensaje</button>
				</form>
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