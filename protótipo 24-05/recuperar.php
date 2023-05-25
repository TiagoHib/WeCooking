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
                        <label>Recuperar Senha</label>
                        <div class="info">
                            Você receberá um email com instruções para recuperar sua senha.
                        </div>
                        <form method="POST" action="VERIFICAÇÃO.php">
                            <input type="text" placeholder="Email" class="input" name="email" required>
                            <div class="column">
                                <div class="links">
                                    <a href="./login.php" class="link1">Fazer login</a>
                                </div>
                                <div class="button">
                                    <input type="submit" name="enviar" value="ENVIAR" class="btn_login">
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </body>
</html>