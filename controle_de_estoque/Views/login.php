<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--- Bootstrap --->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style2.css">
    <title>Login | Controle de Estoque e Vendas</title>
    <!-- Icone da pagina -->
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/images/icon-logo.png" type="image/gx-png" width="32" height="32">
    <!-- Link para o FontAwesome -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/8cdb59b4ce.js" crossorigin="anonymous">
    <style>
        body {
            background-image: url("<?php echo BASE_URL; ?>/assets/images/background.jpg");
            background-size: 100% auto; 
            background-attachment: scroll;
            background-color: #000000;
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login i,
        .senha i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 10px;
        }
        input[type="text"],
        input[type="password"] {
            padding-left: 30px; /* Ajuste conforme necessário */
        }
    </style>
</head>
<body>
   <div class="caixa">
        <div class="borda">
            <div class="row justify-content-center">
                <img class="mb-4" src="<?php echo BASE_URL; ?>/assets/images/logo.png" width="320" height="130">
            </div>
            <div class="row justify-content-center">
                <h1 class="h3 mb-3 font-weight-normal">Bem-Vindo(a)</h1>
            </div>
            <form id="loginForm" method="POST" action="<?php echo BASE_URL; ?>/login/index" class="formulário">
                <div class="login">
                    <i class="fa fa-user-circle-o"></i>
                    <label for="inputUser" class="sr-only">Usuário</label>
                </div>
                <input type="text" value="admin" name="user" id="inputEmail" class="form-control" placeholder="Usuário" required autofocus><br/>
                <div class="senha">
                    <i class="fas fa-lock"></i>
                    <label for="inputPassword" name="password" class="sr-only">Senha</label>
                </div>
                <input type="password" value="admin" name="password" id="inputPassword" class="form-control" placeholder="Senha" required><br/>
            </form>
			 <br>
			 <!-- Adicionado ID ao botão para referenciar no JavaScript -->
            <button id="loginButton" class="botão btn-lg btn-primary btn-block" type="button">Entrar</button>
            <div class="row justify-content-center">
                <p class="mt-5 mb-3 text-muted">Projeto Integrador - Univesp &copy; 2024</p>
            </div>
        </div>
   </div>
    <!---Jquery--->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-3.5.1.min.js"></script>
    <!---JS--->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script>
        // Adicionando um ouvinte de evento de clique ao botão
        document.getElementById("loginButton").addEventListener("click", function() {
            // Enviar o formulário manualmente quando o botão for clicado
            document.getElementById("loginForm").submit();
        });
    </script>
</body>
</html>
