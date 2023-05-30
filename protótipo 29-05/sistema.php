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
                <div class="categ_blocks">
                    <div class="categ_block">         
                        <div class="rcp_text">Nome da receita</div>
                        <img src="./assets/rcp.jpg" class="categ_block" />
                    </div>
                    <div class="categ_block">
                        <div class="rcp_text">Nome da receita</div>
                        <img src="./assets/rcp.jpg" class="categ_block" />
                    </div>
                    <div class="categ_block">
                        <div class="rcp_text">Nome da receita</div>
                        <img src="./assets/rcp.jpg" class="categ_block" />
                    </div>
                    <div class="categ_block">
                        <div class="rcp_text">Nome da receita</div>
                        <img src="./assets/rcp.jpg" class="categ_block" />
                    </div>
                </div>
                <div class="categ_blocks">
                    <div class="categ_block">
                        <div class="rcp_text">Nome da receita</div>
                        <img src="./assets/rcp.jpg" class="categ_block" />
                    </div>
                    <div class="categ_block">
                        <div class="rcp_text">Nome da receita</div>
                        <img src="./assets/rcp.jpg" class="categ_block" />
                    </div>
                    <div class="categ_block">
                        <div class="rcp_text">Nome da receita</div>
                        <img src="./assets/rcp.jpg" class="categ_block" />
                    </div>
                    <div class="categ_block">
                        <div class="rcp_text">Nome da receita</div>
                        <img src="./assets/rcp.jpg" class="categ_block" />
                    </div>
                </div>
            </div>
            <div class="recentes">
                <label class="title">Categorias</label>
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
        </div>
        <button id="scroll_btn"></button>
        <div class="footer">
            Contato | Sobre nós
        </div>
    </div>
</body>
<script>
    var img = 0;
    var menu = 0;

    function prev() {
        if (img === 0) {
            $('#carrossel').css("background-color", "#444444");
            img = 3
        }
        else if (img === 1) {
            $('#carrossel').css("background-color", "#111111");
            img = 0
        }
        else if (img === 2) {
            $('#carrossel').css("background-color", "#222222");
            img = 1
        }
        else if (img === 3) {
            $('#carrossel').css("background-color", "#333333");
            img = 2
        }
    }

    function next() {
        if (img === 0) {
            $('#carrossel').css("background-color", "#111111");
            img = 1
        }
        else if (img === 1) {
            $('#carrossel').css("background-color", "#222222");
            img = 2
        }
        else if (img === 2) {
            $('#carrossel').css("background-color", "#333333");
            img = 3
        }
        else if (img === 3) {
            $('#carrossel').css("background-color", "#444444");
            img = 0
        }
    }

    function perfil() {
        if (menu === 0) {
            $('#perfil').css("opacity", "1")
            menu = 1
        }
        else if (menu === 1) {
            $('#perfil').css("opacity", "")
            menu = 0
        }
    }

    var btn = $('#scroll_btn');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            $(btn).css("visibility", "visible")
        } else {
            $(btn).css("visibility", "")
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '300');
    });
</script>

</html>