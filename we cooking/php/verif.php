<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
</body>
</html>

<?php 
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	/* 1 BLOCO */
	/*arquivo de conexão com o banco de dados*/
	$servidor="localhost"; // servidor de acesso
	$usuario = "root"; // usuario de acesso
	$senha = ""; // senha vazia
	$bd = "4ia2023"; // banco de dados

	$conn = mysqli_connect($servidor, $usuario, $senha, $bd);

	$bd_email = mysqli_query($conn, "SELECT * FROM cadastro WHERE email = '$email'");
	$bd_senha = mysqli_query($conn, "SELECT * FROM cadastro WHERE senha = '$senha'");

	if (mysqli_num_rows($bd_email) === 1 && mysqli_num_rows($bd_senha) === 1){
		header('Location: ./sistema.php');
	}
	else {
		header('Location: ./login.php');
	}

?>	
