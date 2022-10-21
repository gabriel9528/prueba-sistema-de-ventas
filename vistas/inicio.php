<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>
</head>
<body>
<br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="jumbotron">
				
				<br><br><br>
				<h2>Bienvenido al sistema TECSUP</h2>
				<h2>Ingreso de usuario con exito</h2>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>