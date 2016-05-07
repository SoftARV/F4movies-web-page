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
		  <h1 style="color: white;">Bienvenido 
			<?php
				echo $_SESSION['name']; 
			?>!</h1>
		  <p style="color: white;"><?php
		  	if ($_SESSION['perfil']==2) echo "Administrador";
		   	else echo "Usuario";
		   ?></p>
		</div>
		<div class="row">	
		<?php 
			
		 ?>		
			<div class="col-lg-2">
				<div>
					<div class="list-group">
						  <a class="list-group-item disabled">Usuario</a>
						  <a href="usuario.php" class="list-group-item">Compras realizadas</a>
						  <?php 
						  	if ($_SESSION['perfil'] == 2) {
						  		echo '<a class="list-group-item disabled">Panel administrativo</a>
						  		<a href="reporte.php" class="list-group-item active">Reporte de usuarios</a>
						  		<a href="addmovie.php" class="list-group-item">Agregar peliculas</a>';
						  	}
						   ?>
						  
					</div>
				</div>
			</div>
			<div class="col-lg-10">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Compras realizadas</h3>
					</div>
					<div class="panel-body">
						<?php 
						include("modules/admin.php");
							echo Admin();
						 ?>
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
