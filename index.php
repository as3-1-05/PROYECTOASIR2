<?php session_start(); ?>
<html>

<head>
	<title>Homepage</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header">
		Ongi etorri!!
	</div>
	<?php
	if (isset($_SESSION['valid'])) {
		include("connection.php");
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>

		Bienvenido <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Salir</a><br />
		<br />
		<a href='weather.php'>Ver el tiempo</a>
		<br /><br />

		<td>

			<form name="my_form" method="post" action="delete.php">
				User Name: <input type="text" name="borrarusuario"><br />
				<input type="submit" name="btn_delete" value="Delete User" /> <br><br>
			</form>

			<form name="my_form2" method="post" action="update.php">
				Cambiar contraseña: <input type="text" name="ok"><br />
				<input type="submit" name="boomer" value="Update user" /> <br><br>
			</form>

			<a href='select.php'>Ver los usuarios</a>
		</td>
	<?php
	} else {
		echo "Necesitas un usuario para entrar a la página<br/><br/>";
		echo "<a href='login.php'>Entrar</a> | <a href='register.php'>Registrar</a>";
	}
	?>
</body>

</html>