<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<?php
	$servidor = 'localhost'; // nome do servidor = localhost
	$usuario = 'root'; //nome do usuário de acesso ao banco
	$senha = ''; //senha do usuário: em branco e sem espaço
	$bd = "registro"; //nome do banco de dados que será aberto
	$conn = mysqli_connect($servidor, $usuario, $senha, $bd);

	// Check connection
	if (!($conn)) {
		die("Connection failed: " . mysqli_connect_error());
	}

	?>
</body>

</html>