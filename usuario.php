<?php 
		session_start();
		if (!isset($_SESSION["usuario"]))	
			{
				die(header("location: index.php"));
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
		<div class="jumbotron">
		  <h1 style="color: white;">Bienvenido Usuario!</h1>
		  <p>Datos del usuario</p>
		</div>
		<div class="row">	
		<?php 
			
		 ?>		
			<div class="col-lg-2">
				<div>
					<div class="list-group">
						  <a class="list-group-item disabled">Usuario</a>
						  <a href="#" class="list-group-item">Carrito</a>
						  <a href="#" class="list-group-item">Compras realizadas</a>
						  <?php 
						  	if ($_SESSION['perfil'] == 2) {
						  		echo '<a class="list-group-item disabled">Panel administrativo</a>
						  		<a href="#" class="list-group-item">Reporte de usuarios</a>
						  		<a href="#" class="list-group-item">Agregar peliculas</a>
						  		<a href="#" class="list-group-item">Modificar peliculas</a>';
						  	}
						   ?>
						  
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