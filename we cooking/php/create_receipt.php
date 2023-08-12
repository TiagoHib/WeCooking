<?php
require_once('./conn.php');

$nome = $_POST['nome'];
$preparo = $_POST['tempo-preparo'];
$ingredientes = $_POST['ingredientes'];

$sql = "INSERT INTO receita (nome, tempo_preparo, ingredientes) 
	VALUES ('$nome', '$preparo', '$ingredientes')";
if (mysqli_query($conn, $sql)) {
	echo "*" . json_encode(mysqli_insert_id($conn));
	$id = json_encode(mysqli_insert_id($conn));

	$target_dir = "./pages/" .$id . "/";
	// diretório onde encontra-se o arquivo
	mkdir($target_dir);  
	$filename = $target_dir. "index.php";

	// verifica se existe o arquivo
	if (!file_exists($filename)) {
		
		//Adciona um novo texto
		$script = '
		<html lang="en">
    <head>
        <link rel="stylesheet" href="../styles/stylee.css">
        <title>Login</title>
    </head>
    <body>
	<div class="screen">
	<div class="header">
		<div class="center">
			<label class="text">Categorias</label>
			<img src="../login/logo.png" class="logo">
			<label class="text">Receitas</label>
		</div>
		<div class="back_perfil" onclick="perfil()">
			<img src="./assets/perfil.png" class="perfil">
		</div>
		<div class="menu_perfil" id="perfil">
			Receitas favoritas<br>
			Alterar dados<br>
			Sair
		</div>
	</div>
	<div class="content" style="margin-top: 5vh">
		<div class="title">Criar receita</div>
		<form runat="server" id="form">
			<div class="add-photo">
				<img id="receiptPhoto" src="./php/images' . $id . '" alt="Receipt photo" />
			</div>
			<div class="receipt-info">
				<div>'. $nome .'</div>
				<div>' .$preparo .'</div>
				<div>' .$ingredientes .'</div>
			</div>
		</form>
	</div>
	<button id="scroll_btn"></button>
	<div class="footer">
		Contato | Sobre nós
	</div>
</div>
    </body>
</html>
		';

		//Escrevendo
		$file = @fopen($filename, "w+");
		@fwrite($file, stripslashes($script));
		@fclose($file);
	} 
	
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>