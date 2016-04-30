<?php 
		include("modules/modules.php");
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		echo Head("Base");
	?>
</head>
<body>
	<?php 
		echo Menu();
	?>
<footer>
	<?php 
		echo Footer();
	?>
</footer>
<?php echo imports(); ?>
</body>

</html>