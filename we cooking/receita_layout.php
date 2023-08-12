<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles/receita.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>We Cooking | Receita</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="./styles/file.css" type="text/css" />
    <script src="https://kit.fontawesome.com/2e6f1b8c97.js" crossorigin="anonymous"></script>
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
                <ul>
                    <li><span>Receitas favoritas</span></li>
                    <li><span>Alterar dados</span></li>
                    <li><span>Sair</span></li>
                </ul>
            </div>
        </div>
        <div class="content" style="margin-top: 5vh">
            <div class="title">Criar receita</div>
            <form id="form">
                <div class="add-photo">
                    <!--
                        <label for="file">
                            <img id="receiptPhoto" src="./assets/add-image.png" alt="Receipt photo" />
                        </label>
                        <input type='file' id="file" name="receiptImage" />
                    -->
                    <div id="fileUploader" class="dropzone"></div>
                </div>
                <div class="receipt-info">
                    <input type="text" name="nome" placeholder="Nome da receita:" class="input">
                    <input type="number" name="tempo-preparo" placeholder="Tempo de preparo (Minutos):" class="input">
                    <textarea name="ingredientes" placeholder="Ingredientes:" style="resize: none"></textarea>
                    <button id="submit">Salvar</button>
                </div>
            </form>
        </div>
        <button id="scroll_btn"></button>
        <div class="footer">
            Contato | Sobre nós
        </div>
    </div>
</body>
<script>
    let menu = 0;
    let journey_id = null;

    function perfil() {
        if (menu === 0) {
            $('#perfil').css("transform", "scaleY(1)")
            menu = 1
        }
        else if (menu === 1) {
            $('#perfil').css("transform", "scaleY(0)")
            menu = 0
        }
    }

    let btn = $('#scroll_btn');

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

    $("form#form").submit(function (e) {
        e.preventDefault(); // Previne o submit de recarregar a página
        var formData = new FormData(this); // Pega os dados do form
        formData.append('id', journey_id);

        $.ajax({
            url: './php/create_receipt.php',
            type: 'POST',
            data: formData,
            success: function (response) {
                journey_id = response.split('*')[1];
                myDropzone.processQueue();
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });

    let myDropzone = new Dropzone("div#fileUploader", {
        url: "./php/uploadPhoto.php",
        paramName: 'files',
        uploadMultiple: true,
        addRemoveLinks: true,
        autoProcessQueue: false,
        acceptedFiles: ".jpeg, .jpg, .png", // Allowed extensions
        dictDefaultMessage: "Selecionar fotos (máx: 5)",
        dictCancelUpload: "",
        dictRemoveFile: "",
        parallelUploads: 100,
        maxFiles: 5,

        init: function () {

            var myDropzone = this;

            this.on('sending', function (file, xhr, formData) {
                formData.append('id', journey_id);
            });

            // Called when a file is added to the queue
            // Receives `file`
            this.on("addedfile", file => {
                if (myDropzone.files.length > 10) {
                    $("#fileUploader").find(".dz-button").text((myDropzone.files.length - 1) + " arquivos selecionados");
                }
                else {
                    $("#fileUploader").find(".dz-button").text(myDropzone.files.length + " arquivos selecionados");
                }


                $(".msg-aviso").addClass("hide-msg");
                $(".dz-default").css("border", "");

                // Inicio configuração de botão para remover arquivo
                if (this.options.addRemoveLinks) {
                    file._removeLink = Dropzone.createElement(
                        `<i class="fa-solid fa-xmark x-mark" href="javascript:undefined;" data-dz-remove></i>`
                    );
                    file.previewElement.appendChild(file._removeLink);
                }

                let removeFileEvent = (e) => {
                    $("#fileUploader").find(".dz-button").text((myDropzone.files.length - 1) + " arquivos selecionados");

                    if ((myDropzone.files.length - 1) === 0) {
                        warning = 0;
                        $("#fileUploader").find(".dz-button").text("Selecionar arquivos...");
                    }

                    //$.ajax({
                    //    url: "./php/deleteFiles.php",
                    //    type: 'POST',
                    //    data: { nome: file.name, id: journey_id, step: "step-3", acao: "single" },
                    //});

                    //console.log(file.name);

                    e.preventDefault();
                    e.stopPropagation();
                    if (file.status === Dropzone.UPLOADING) {
                        return Dropzone.confirm(
                            this.options.dictCancelUploadConfirmation,
                            () => this.removeFile(file)
                        );
                    } else {
                        if (this.options.dictRemoveFileConfirmation) {
                            return Dropzone.confirm(
                                this.options.dictRemoveFileConfirmation,
                                () => this.removeFile(file)
                            );
                        } else {
                            return this.removeFile(file);
                        }
                    }
                };

                for (let removeLink of file.previewElement.querySelectorAll("[data-dz-remove]")) {
                    removeLink.addEventListener("click", removeFileEvent);
                }
                // Fim configuração de botão para remover arquivo
            });

            this.on("error", function (file) {
                this.removeFile(file);
            });
        },
    });

</script>

</html>