<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="./styles/stylee.css">
        <title>Login</title>
    </head>
    <body>
        <div class="screen">
            <div class="content">
                    <div class="login_left">
                        <img src="./assets/logo.png" class="logo">
                        <div class="desc">
                            O seu website de receitas!
                        </div>
                    </div>
                    <div class="center" style="height: 41vh">
                        &nbsp
                    </div>
                    <div class="login_right">
                        <label>Cadastro</label>
                        <form method="POST" action="conexao.php">
                            <input type="text" placeholder="Nome" class="input" name="nome" required>
                            <input type="email" placeholder="Email" class="input" name="email" required>
                            <input type="password" placeholder="Senha" class="input" name="senha" required>
                            <input type="password" placeholder="Confirmar senha" class="input" name="conf_senha" required>
                            <div class="column">
                                <div class="links">
                                    <a href="./login.php" class="link1">Fazer login</a>
                                </div>
                                <div class="button">
                                    <input type="submit" name="enviar" value="CRIAR CONTA" class="btn_login">
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </body>
</html>