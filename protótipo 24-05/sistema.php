<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="./styles/sistema.css">
        <title>Sistema</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <body>
    <div class="screen">
        <div class="header">
            <img src="../login/logo.png" class="logo">
            <label class="text">Categorias</label>
            <label class="text">Receitas</label>
            <div class="back_perfil">
                <img src="./assets/perfil.png" class="perfil">
            </div>
            <div class="menu_perfil">
                Receitas favoritas<br>
                Alterar dados<br>
                Sair
            </div>
        </div>
        <div class="content">
            <div id="carrossel">
                <div class="buttons">
                    <div class="prev" onclick="prev()">
                        <img src="./assets/arrow-left.png" class="arrow">
                    </div>
                    <div class="next" onclick="next()">
                        <img src="./assets/arrow-right.png" class="arrow">
                    </div>
                </div>
            </div>
            <div class="recentes">
                <label class="title">Adicionados recentemente</label>
                <div class="blocks_recentes">
                    <div class="left"></div>
                    <div class="right">
                        <div class="upper_blocks">
                            <div class="upper_left">
                                <div class="wide_block"></div>
                                <div class="wide_block"></div>
                            </div>
                            <div class="block"></div>
                        </div>
                        <div class="lower_blocks">
                            <div class="mini_block"></div>
                            <div class="mini_block"></div>
                            <div class="mini_block" style="width: 22vw;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recentes">
                <label class="title">Categorias</label>
                <div class="categ_blocks">
                    <div class="categ_block"></div>
                    <div class="categ_block"></div>
                    <div class="categ_block"></div>
                </div>
                <div class="categ_blocks">
                    <div class="categ_block"></div>
                    <div class="categ_block"></div>
                    <div class="categ_block"></div>
                </div>
            </div>
        </div>
        <div class="footer">
            Contato | Sobre nós
        </div>
    </div>
    </body>
    <script>
        var img = 0; 

        function prev() {
            let img = Math.floor(Math.random() * 6) + 1;
            if (img === 1){
                $('#carrossel').css("background-color", "#00ffff");
            }
            else if (img === 2){
                $('#carrossel').css("background-color", "#823fda");
            }
            else if (img === 3){
                $('#carrossel').css("background-color", "#e7ea98");
            }
            else if (img === 4){
                $('#carrossel').css("background-color", "#ea98c7");
            }
            else if (img === 5){
                $('#carrossel').css("background-color", "#eaa498");
            }
            else if (img === 6){
                $('#carrossel').css("background-color", "#9bea98");
            }
        } 

        function next() {
            let img = Math.floor(Math.random() * 6) + 1;
            if (img === 1){
                $('#carrossel').css("background-color", "#00ffff");
            }
            else if (img === 2){
                $('#carrossel').css("background-color", "#823fda");
            }
            else if (img === 3){
                $('#carrossel').css("background-color", "#e7ea98");
            }
            else if (img === 4){
                $('#carrossel').css("background-color", "#ea98c7");
            }
            else if (img === 5){
                $('#carrossel').css("background-color", "#eaa498");
            }
            else if (img === 6){
                $('#carrossel').css("background-color", "#9bea98");
            }
        }
    </script>
</html>