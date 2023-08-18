<?php
require_once('./conn.php');

$id = $_POST['id'];

$sql = "SELECT nome, tempo_preparo, images, ingredientes FROM receita WHERE id_receita = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $imageName = explode(",", $row['images']);

    $target_dir = "../receipts/" . $id . "/";
    // diretório onde encontra-se o arquivo
    mkdir($target_dir);
    $filename = $target_dir . "index.php";

    // verifica se existe o arquivo
    if (!file_exists($filename)) {

      //Adciona um novo texto
      $script = '
		<html lang="pt">
			<head>
				<link rel="stylesheet" href="../../styles/receita.css">
				<title>'. $row['nome'] . '</title>
			</head>
			<body>
				<div class="screen">
				<div class="header">
					<div class="center">
						<img src="../../assets/logo.png" class="logo">
						<label class="text">Categorias <i class="fa-solid fa-chevron-down"></i></label>
						<label class="text">Receitas <i class="fa-solid fa-chevron-down"></i></label>
					</div>
					<div class="back_perfil" onclick="perfil()">
						<img src="../../assets/perfil.png" class="perfil">
					</div>
					<div class="menu_perfil" id="perfil">
						Receitas favoritas<br>
						Alterar dados<br>
						Sair
					</div>
				</div>
				<div class="content" style="margin-top: 5vh">
					<form runat="server" id="form">
						<div class="add-photo">
							<img id="receiptPhoto" src="../../php/images/' . $id . '/' . $imageName[1] .'" alt="Receipt photo" />
							<img id="receiptPhoto" src="../../php/images/' . $id . '/' . $imageName[2] .'" alt="Receipt photo" />
							<img id="receiptPhoto" src="../../php/images/' . $id . '/' . $imageName[3] .'" alt="Receipt photo" />
						</div>
						<div class="receipt-info">
							<div>' . $row['nome'] . '</div>
							<div>Tempo de preparo: ' . $row['tempo_preparo'] . ' minutos</div>
							<div>Ingredientes:'. $row['ingredientes'] . '</div>
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

    echo "*" . json_encode($id);
  }
} else {
  echo "0 results";
}
?>