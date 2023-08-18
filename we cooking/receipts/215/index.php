
		<html lang="pt">
			<head>
				<link rel="stylesheet" href="../../styles/receita.css">
				<title>Login</title>
			</head>
			<body>
				<div class="screen">
				<div class="header">
					<div class="center">
						<img src="../assets/logo.png" class="logo">
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
					<div class="title">Criar receita</div>
					<form runat="server" id="form">
						<div class="add-photo">
							<img id="receiptPhoto" src="../../php/images215/" alt="Receipt photo" />
						</div>
						<div class="receipt-info">
							<div>aaaaa</div>
							<div>2</div>
							<div>3</div>
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
		