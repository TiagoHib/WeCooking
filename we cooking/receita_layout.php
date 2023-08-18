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
                <img src="./assets/logo.png" class="logo">
                <label class="text">Categorias <i class="fa-solid fa-chevron-down"></i></label>

                <label class="text">Receitas <i class="fa-solid fa-chevron-down"></i></label>
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
                    <div id="fileUploader" class="dropzone" name="fileUploader">
                        <div class="dz-message">
                            <i class="fa-regular fa-image" id="imageUpload"></i>
                            <div class="imageText">Clique aqui para adicionar uma imagem</div>
                        </div>
                    </div>
                </div>
                <div class="receipt-info">
                    <label for="name">Título da receita*</label>
                    <input type="text" name="nome" placeholder="Nome da receita:" class="input">

                    <label for="ingredientes">Ingredientes*</label>
                    <div class="ingredientes">
                        <input name="ingrediente1" placeholder="Ingrediente 1" class="input" maxlength="30">
                        <input name="ingrediente2" placeholder="Ingrediente 2" class="input" maxlength="30">
                        <input name="ingrediente3" placeholder="Ingrediente 3" class="input" maxlength="30">
                    </div>
                    <div class="add-ingr">Adicionar ingrediente</div>

                    <label for="tempo-preparo">Tempo de preparo*</label>
                    <input type="number" name="tempo-preparo" placeholder="Tempo de preparo (Minutos):" class="input">

                    <label for="dificuldade">Dificuldade*</label>
                    <div class="dificuldade" id="">
                        <div id="fácil" class="btnDif">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                                fill="none">
                                <path
                                    d="M3.82846 13.3041H4.52613C4.52606 13.1684 4.48643 13.0357 4.41208 12.9222C4.33773 12.8087 4.23189 12.7193 4.10753 12.665L3.82846 13.3041ZM16.8517 13.3041L16.5726 12.665C16.4483 12.7193 16.3424 12.8087 16.2681 12.9222C16.1937 13.0357 16.1541 13.1684 16.154 13.3041H16.8517ZM13.8285 6.24923C13.8285 6.43426 13.902 6.61172 14.0328 6.74256C14.1636 6.8734 14.3411 6.9469 14.5261 6.9469C14.7112 6.9469 14.8886 6.8734 15.0195 6.74256C15.1503 6.61172 15.2238 6.43426 15.2238 6.24923H13.8285ZM5.45637 6.24923C5.45637 6.43426 5.52987 6.61172 5.66071 6.74256C5.79155 6.8734 5.96901 6.9469 6.15404 6.9469C6.33908 6.9469 6.51653 6.8734 6.64737 6.74256C6.77821 6.61172 6.85172 6.43426 6.85172 6.24923H5.45637ZM5.68893 3.69109C4.27033 3.69109 2.90983 4.25462 1.90673 5.25773C0.903624 6.26083 0.340088 7.62132 0.340088 9.03992H1.73544C1.73544 7.99139 2.15196 6.98581 2.89339 6.24439C3.63481 5.50296 4.64039 5.08644 5.68893 5.08644V3.69109ZM14.9913 5.08644C16.0398 5.08644 17.0454 5.50296 17.7868 6.24439C18.5282 6.98581 18.9447 7.99139 18.9447 9.03992H20.3401C20.3401 7.62132 19.7766 6.26083 18.7735 5.25773C17.7703 4.25462 16.4099 3.69109 14.9913 3.69109V5.08644ZM13.1308 19.505H7.54939V20.9004H13.1308V19.505ZM7.54939 19.505C6.65265 19.505 6.04986 19.5032 5.60055 19.4427C5.17172 19.385 4.98753 19.2855 4.8666 19.1636L3.88055 20.1516C4.30381 20.5748 4.83125 20.7469 5.41544 20.826C5.97916 20.9022 6.69172 20.9004 7.54939 20.9004V19.505ZM3.13079 16.4818C3.13079 17.3395 3.12893 18.052 3.2052 18.6157C3.28334 19.1999 3.45637 19.7274 3.87962 20.1506L4.8666 19.1646C4.74567 19.0436 4.64613 18.8595 4.58753 18.4297C4.528 17.9813 4.52613 17.3785 4.52613 16.4818H3.13079ZM16.154 16.4818C16.154 17.3785 16.1522 17.9813 16.0917 18.4306C16.034 18.8595 15.9345 19.0436 15.8126 19.1646L16.8006 20.1506C17.2238 19.7274 17.3959 19.1999 17.475 18.6157C17.5513 18.052 17.5494 17.3395 17.5494 16.4818H16.154ZM13.1308 20.9004C13.9885 20.9004 14.701 20.9022 15.2647 20.826C15.8489 20.7478 16.3773 20.5748 16.8006 20.1506L15.8136 19.1646C15.6926 19.2855 15.5085 19.385 15.0787 19.4436C14.6303 19.5032 14.0275 19.505 13.1308 19.505V20.9004ZM5.68893 5.08644C5.888 5.08644 6.08241 5.10132 6.27311 5.12923L6.47683 3.74876C6.21596 3.71028 5.95262 3.69101 5.68893 3.69109V5.08644ZM10.3401 0.900391C9.31941 0.900392 8.32437 1.22006 7.49467 1.81452C6.66497 2.40897 6.04228 3.24835 5.71404 4.21481L7.03497 4.66318C7.26954 3.97277 7.71446 3.37316 8.30724 2.94855C8.90003 2.52394 9.61092 2.29565 10.3401 2.29574V0.900391ZM5.71404 4.21481C5.5429 4.7203 5.45586 5.25044 5.45637 5.78411H6.85172C6.85172 5.39062 6.91683 5.01388 7.0359 4.66318L5.71404 4.21481ZM14.9913 3.69109C14.7243 3.69109 14.461 3.71062 14.2033 3.74876L14.408 5.12923C14.6011 5.10072 14.796 5.08642 14.9913 5.08644V3.69109ZM10.3401 2.29574C11.0691 2.29585 11.7798 2.52423 12.3724 2.94882C12.965 3.37342 13.4098 3.97292 13.6443 4.66318L14.9652 4.21481C14.637 3.2485 14.0145 2.40923 13.185 1.81479C12.3554 1.22035 11.3606 0.900586 10.3401 0.900391V2.29574ZM13.6443 4.66318C13.7633 5.01388 13.8285 5.39062 13.8285 5.78411H15.2238C15.2238 5.2362 15.1326 4.70876 14.9652 4.21481L13.6452 4.66318H13.6443ZM4.52613 16.4818V13.3041H3.13079V16.4818H4.52613ZM4.10753 12.665C3.4023 12.3571 2.80224 11.8501 2.38089 11.2062C1.95954 10.5623 1.73523 9.80944 1.73544 9.03992H0.340088C0.340019 10.0808 0.643609 11.0991 1.21365 11.9701C1.7837 12.841 2.59544 13.5267 3.54939 13.9432L4.10753 12.665ZM16.154 13.3041V16.4818H17.5494V13.3041H16.154ZM18.9447 9.03992C18.9449 9.80944 18.7206 10.5623 18.2993 11.2062C17.8779 11.8501 17.2779 12.3571 16.5726 12.665L17.1308 13.9432C18.0847 13.5267 18.8965 12.841 19.4665 11.9701C20.0366 11.0991 20.3402 10.0808 20.3401 9.03992H18.9447ZM13.8285 5.78411V6.24923H15.2238V5.78411H13.8285ZM5.45637 5.78411V6.24923H6.85172V5.78411H5.45637Z"
                                    fill="#DBDBDB" />
                            </svg>
                        </div>
                        <div id="médio" class="btnDif">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                                fill="none">
                                <path
                                    d="M3.82846 13.3041H4.52613C4.52606 13.1684 4.48643 13.0357 4.41208 12.9222C4.33773 12.8087 4.23189 12.7193 4.10753 12.665L3.82846 13.3041ZM16.8517 13.3041L16.5726 12.665C16.4483 12.7193 16.3424 12.8087 16.2681 12.9222C16.1937 13.0357 16.1541 13.1684 16.154 13.3041H16.8517ZM13.8285 6.24923C13.8285 6.43426 13.902 6.61172 14.0328 6.74256C14.1636 6.8734 14.3411 6.9469 14.5261 6.9469C14.7112 6.9469 14.8886 6.8734 15.0195 6.74256C15.1503 6.61172 15.2238 6.43426 15.2238 6.24923H13.8285ZM5.45637 6.24923C5.45637 6.43426 5.52987 6.61172 5.66071 6.74256C5.79155 6.8734 5.96901 6.9469 6.15404 6.9469C6.33908 6.9469 6.51653 6.8734 6.64737 6.74256C6.77821 6.61172 6.85172 6.43426 6.85172 6.24923H5.45637ZM5.68893 3.69109C4.27033 3.69109 2.90983 4.25462 1.90673 5.25773C0.903624 6.26083 0.340088 7.62132 0.340088 9.03992H1.73544C1.73544 7.99139 2.15196 6.98581 2.89339 6.24439C3.63481 5.50296 4.64039 5.08644 5.68893 5.08644V3.69109ZM14.9913 5.08644C16.0398 5.08644 17.0454 5.50296 17.7868 6.24439C18.5282 6.98581 18.9447 7.99139 18.9447 9.03992H20.3401C20.3401 7.62132 19.7766 6.26083 18.7735 5.25773C17.7703 4.25462 16.4099 3.69109 14.9913 3.69109V5.08644ZM13.1308 19.505H7.54939V20.9004H13.1308V19.505ZM7.54939 19.505C6.65265 19.505 6.04986 19.5032 5.60055 19.4427C5.17172 19.385 4.98753 19.2855 4.8666 19.1636L3.88055 20.1516C4.30381 20.5748 4.83125 20.7469 5.41544 20.826C5.97916 20.9022 6.69172 20.9004 7.54939 20.9004V19.505ZM3.13079 16.4818C3.13079 17.3395 3.12893 18.052 3.2052 18.6157C3.28334 19.1999 3.45637 19.7274 3.87962 20.1506L4.8666 19.1646C4.74567 19.0436 4.64613 18.8595 4.58753 18.4297C4.528 17.9813 4.52613 17.3785 4.52613 16.4818H3.13079ZM16.154 16.4818C16.154 17.3785 16.1522 17.9813 16.0917 18.4306C16.034 18.8595 15.9345 19.0436 15.8126 19.1646L16.8006 20.1506C17.2238 19.7274 17.3959 19.1999 17.475 18.6157C17.5513 18.052 17.5494 17.3395 17.5494 16.4818H16.154ZM13.1308 20.9004C13.9885 20.9004 14.701 20.9022 15.2647 20.826C15.8489 20.7478 16.3773 20.5748 16.8006 20.1506L15.8136 19.1646C15.6926 19.2855 15.5085 19.385 15.0787 19.4436C14.6303 19.5032 14.0275 19.505 13.1308 19.505V20.9004ZM5.68893 5.08644C5.888 5.08644 6.08241 5.10132 6.27311 5.12923L6.47683 3.74876C6.21596 3.71028 5.95262 3.69101 5.68893 3.69109V5.08644ZM10.3401 0.900391C9.31941 0.900392 8.32437 1.22006 7.49467 1.81452C6.66497 2.40897 6.04228 3.24835 5.71404 4.21481L7.03497 4.66318C7.26954 3.97277 7.71446 3.37316 8.30724 2.94855C8.90003 2.52394 9.61092 2.29565 10.3401 2.29574V0.900391ZM5.71404 4.21481C5.5429 4.7203 5.45586 5.25044 5.45637 5.78411H6.85172C6.85172 5.39062 6.91683 5.01388 7.0359 4.66318L5.71404 4.21481ZM14.9913 3.69109C14.7243 3.69109 14.461 3.71062 14.2033 3.74876L14.408 5.12923C14.6011 5.10072 14.796 5.08642 14.9913 5.08644V3.69109ZM10.3401 2.29574C11.0691 2.29585 11.7798 2.52423 12.3724 2.94882C12.965 3.37342 13.4098 3.97292 13.6443 4.66318L14.9652 4.21481C14.637 3.2485 14.0145 2.40923 13.185 1.81479C12.3554 1.22035 11.3606 0.900586 10.3401 0.900391V2.29574ZM13.6443 4.66318C13.7633 5.01388 13.8285 5.39062 13.8285 5.78411H15.2238C15.2238 5.2362 15.1326 4.70876 14.9652 4.21481L13.6452 4.66318H13.6443ZM4.52613 16.4818V13.3041H3.13079V16.4818H4.52613ZM4.10753 12.665C3.4023 12.3571 2.80224 11.8501 2.38089 11.2062C1.95954 10.5623 1.73523 9.80944 1.73544 9.03992H0.340088C0.340019 10.0808 0.643609 11.0991 1.21365 11.9701C1.7837 12.841 2.59544 13.5267 3.54939 13.9432L4.10753 12.665ZM16.154 13.3041V16.4818H17.5494V13.3041H16.154ZM18.9447 9.03992C18.9449 9.80944 18.7206 10.5623 18.2993 11.2062C17.8779 11.8501 17.2779 12.3571 16.5726 12.665L17.1308 13.9432C18.0847 13.5267 18.8965 12.841 19.4665 11.9701C20.0366 11.0991 20.3402 10.0808 20.3401 9.03992H18.9447ZM13.8285 5.78411V6.24923H15.2238V5.78411H13.8285ZM5.45637 5.78411V6.24923H6.85172V5.78411H5.45637Z"
                                    fill="#DBDBDB" />
                            </svg>
                        </div>
                        <div id="difícil" class="btnDif">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                                fill="none">
                                <path
                                    d="M3.82846 13.3041H4.52613C4.52606 13.1684 4.48643 13.0357 4.41208 12.9222C4.33773 12.8087 4.23189 12.7193 4.10753 12.665L3.82846 13.3041ZM16.8517 13.3041L16.5726 12.665C16.4483 12.7193 16.3424 12.8087 16.2681 12.9222C16.1937 13.0357 16.1541 13.1684 16.154 13.3041H16.8517ZM13.8285 6.24923C13.8285 6.43426 13.902 6.61172 14.0328 6.74256C14.1636 6.8734 14.3411 6.9469 14.5261 6.9469C14.7112 6.9469 14.8886 6.8734 15.0195 6.74256C15.1503 6.61172 15.2238 6.43426 15.2238 6.24923H13.8285ZM5.45637 6.24923C5.45637 6.43426 5.52987 6.61172 5.66071 6.74256C5.79155 6.8734 5.96901 6.9469 6.15404 6.9469C6.33908 6.9469 6.51653 6.8734 6.64737 6.74256C6.77821 6.61172 6.85172 6.43426 6.85172 6.24923H5.45637ZM5.68893 3.69109C4.27033 3.69109 2.90983 4.25462 1.90673 5.25773C0.903624 6.26083 0.340088 7.62132 0.340088 9.03992H1.73544C1.73544 7.99139 2.15196 6.98581 2.89339 6.24439C3.63481 5.50296 4.64039 5.08644 5.68893 5.08644V3.69109ZM14.9913 5.08644C16.0398 5.08644 17.0454 5.50296 17.7868 6.24439C18.5282 6.98581 18.9447 7.99139 18.9447 9.03992H20.3401C20.3401 7.62132 19.7766 6.26083 18.7735 5.25773C17.7703 4.25462 16.4099 3.69109 14.9913 3.69109V5.08644ZM13.1308 19.505H7.54939V20.9004H13.1308V19.505ZM7.54939 19.505C6.65265 19.505 6.04986 19.5032 5.60055 19.4427C5.17172 19.385 4.98753 19.2855 4.8666 19.1636L3.88055 20.1516C4.30381 20.5748 4.83125 20.7469 5.41544 20.826C5.97916 20.9022 6.69172 20.9004 7.54939 20.9004V19.505ZM3.13079 16.4818C3.13079 17.3395 3.12893 18.052 3.2052 18.6157C3.28334 19.1999 3.45637 19.7274 3.87962 20.1506L4.8666 19.1646C4.74567 19.0436 4.64613 18.8595 4.58753 18.4297C4.528 17.9813 4.52613 17.3785 4.52613 16.4818H3.13079ZM16.154 16.4818C16.154 17.3785 16.1522 17.9813 16.0917 18.4306C16.034 18.8595 15.9345 19.0436 15.8126 19.1646L16.8006 20.1506C17.2238 19.7274 17.3959 19.1999 17.475 18.6157C17.5513 18.052 17.5494 17.3395 17.5494 16.4818H16.154ZM13.1308 20.9004C13.9885 20.9004 14.701 20.9022 15.2647 20.826C15.8489 20.7478 16.3773 20.5748 16.8006 20.1506L15.8136 19.1646C15.6926 19.2855 15.5085 19.385 15.0787 19.4436C14.6303 19.5032 14.0275 19.505 13.1308 19.505V20.9004ZM5.68893 5.08644C5.888 5.08644 6.08241 5.10132 6.27311 5.12923L6.47683 3.74876C6.21596 3.71028 5.95262 3.69101 5.68893 3.69109V5.08644ZM10.3401 0.900391C9.31941 0.900392 8.32437 1.22006 7.49467 1.81452C6.66497 2.40897 6.04228 3.24835 5.71404 4.21481L7.03497 4.66318C7.26954 3.97277 7.71446 3.37316 8.30724 2.94855C8.90003 2.52394 9.61092 2.29565 10.3401 2.29574V0.900391ZM5.71404 4.21481C5.5429 4.7203 5.45586 5.25044 5.45637 5.78411H6.85172C6.85172 5.39062 6.91683 5.01388 7.0359 4.66318L5.71404 4.21481ZM14.9913 3.69109C14.7243 3.69109 14.461 3.71062 14.2033 3.74876L14.408 5.12923C14.6011 5.10072 14.796 5.08642 14.9913 5.08644V3.69109ZM10.3401 2.29574C11.0691 2.29585 11.7798 2.52423 12.3724 2.94882C12.965 3.37342 13.4098 3.97292 13.6443 4.66318L14.9652 4.21481C14.637 3.2485 14.0145 2.40923 13.185 1.81479C12.3554 1.22035 11.3606 0.900586 10.3401 0.900391V2.29574ZM13.6443 4.66318C13.7633 5.01388 13.8285 5.39062 13.8285 5.78411H15.2238C15.2238 5.2362 15.1326 4.70876 14.9652 4.21481L13.6452 4.66318H13.6443ZM4.52613 16.4818V13.3041H3.13079V16.4818H4.52613ZM4.10753 12.665C3.4023 12.3571 2.80224 11.8501 2.38089 11.2062C1.95954 10.5623 1.73523 9.80944 1.73544 9.03992H0.340088C0.340019 10.0808 0.643609 11.0991 1.21365 11.9701C1.7837 12.841 2.59544 13.5267 3.54939 13.9432L4.10753 12.665ZM16.154 13.3041V16.4818H17.5494V13.3041H16.154ZM18.9447 9.03992C18.9449 9.80944 18.7206 10.5623 18.2993 11.2062C17.8779 11.8501 17.2779 12.3571 16.5726 12.665L17.1308 13.9432C18.0847 13.5267 18.8965 12.841 19.4665 11.9701C20.0366 11.0991 20.3402 10.0808 20.3401 9.03992H18.9447ZM13.8285 5.78411V6.24923H15.2238V5.78411H13.8285ZM5.45637 5.78411V6.24923H6.85172V5.78411H5.45637Z"
                                    fill="#DBDBDB" />
                            </svg>
                        </div>
                       
                    </div>
                    <div id="textDif"></div>
                    <button id="submit">Salvar</button>
                </div>

            </form>
        </div>
        <button id="scroll_btn">
            <i class="fa-solid fa-arrow-up"></i>
        </button>
        <div class="footer">
            Contato | Sobre nós
        </div>
    </div>
</body>
<script>
    let menu = 0;
    let journey_id = null;

    $(".btnDif").on('click', function (e) {
        $("#textDif").text(e.target.id)

        $(".btnDif").removeClass("difSelected")
        $("#" + e.target.id).toggleClass("difSelected")

        $(".dificuldade").attr("id", e.target.id)
    })

    $(".btnDif").hover( function (e) {
        $("#textDif").text(e.target.id)
    })

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
        if ($(window).scrollTop() > 200) {
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
        formData.append('ingredientes', $(".ingredientes").children().length)
        formData.append('dificuldade', $(".dificuldade").attr('id'))

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
        dictDefaultMessage: "Selecionar arquivos...",
        dictCancelUpload: "",
        dictRemoveFile: "",
        parallelUploads: 100,
        maxFiles: 3,

        init: function () {

            var myDropzone = this;

            this.on('sending', function (file, xhr, formData) {
                formData.append('id', journey_id);
            });

            this.on('success', function () { 
                var idData = journey_id
                console.log(idData)

                $.ajax({
                    type: 'POST',
                    url: './php/get_form_data.php',
                    data: {id: idData},
                    cache: false,
                });
            })

            // Called when a file is added to the queue
            // Receives `file`
            this.on("addedfile", file => {
                if (myDropzone.files.length >= 0) {
                    $("#imageUpload").css("visibility", "hidden");
                    $(".imageText").text("Clique aqui para adicionar outra imagem")
                }

                if (myDropzone.files.length > 3) {
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
                        $("#imageUpload").css("visibility", "visible");
                        $(".imageText").text("Clique aqui para adicionar uma imagem")
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

    const btn_add_ingr = $(".add-ingr");

    btn_add_ingr.on('click', function (e) {
        let ingrs = $(".ingredientes").children().length
        let ingrAtual = ingrs + 1

        $('<div></div>', {
            class: 'ingrInput ingr' + ingrAtual,
        }).appendTo('.ingredientes');

        $('<input>', {
            class: 'input',
            name: 'ingrediente' + ingrAtual,
            id: 'ad-input-' + ingrAtual,
            placeholder: 'Ingrediente ' + (ingrs + 1),
            maxlength: "30",
        }).appendTo('.ingr' + ingrAtual);

        $('<i></i>', {
            class: "fa-solid fa-xmark",
            id: ingrAtual,
        }).appendTo('.ingr' + ingrAtual);

        $("i").click(function (e) {
            $(".ingr" + e.target.id).remove()

            $("i#" + (ingrAtual - 1)).css("opacity", "1");
        })

        $("i#" + (ingrAtual - 1)).css("opacity", "0");
    });

</script>

</html>