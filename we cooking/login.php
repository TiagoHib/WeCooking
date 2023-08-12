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
                    <div class="center">
                        &nbsp
                    </div>
                    <div class="login_right">
                        <label>Login</label>
                        <form method="POST" action="sistema.php">
                            <input type="email" placeholder="Email" class="input" name="email" required>
                            <input type="password" placeholder="Senha" class="input" name="senha" required>
                            <div class="column">
                                <div class="links">
                                    <a href="./cadastro.php" class="link1">Criar conta</a>
                                    <a href="./recuperar.php" class="link2">Esqueci a senha</a>
                                </div>
                                <div class="button">
                                    <input type="submit" name="enviar" value="LOGIN" class="btn_login">
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </body>
</html>