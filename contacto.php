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
	<link rel="stylesheet" type="text/css" href="css/style-contacto.css">
</head>
<body>
	<?php 
		echo Menu();
		echo contacto();
	?>

	<div class="container">
		<div class="panel panel-primary">
	  		<div class="panel-heading">
	    			<h3 class="panel-title">Planilla de contacto</h3>
	 		</div>
	  			<div class="panel-body">
		    		<form class="form-horizontal" action="modules/contacto.php" method="POST">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
						<div class="col-sm-4">
							<input type="email" class="form-control" id="cmail" name="cmail" placeholder="Correo" required>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="cname" name="cname" placeholder="Nombre" required>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Asunto</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="casunto" name="casunto" placeholder="Asunto" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<textarea class="form-control" rows="8" id="cdesc" name="cdesc" required></textarea>
						</div>
						
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Enviar</button>
						</div>
					</div>
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