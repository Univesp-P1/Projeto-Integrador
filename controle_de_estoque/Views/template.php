<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--- Bootstrap --->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css">
    <title><?php echo $name_title; ?></title>
    <!--- Icone da pagina --->
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/images/icon-logo.png" type="image/gx-png" width="32" height="32">
    <!--- CSS --->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
    <!--- Biblioteca de icones --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            background-image: url("<?php echo BASE_URL; ?>/assets/images/background.jpg");
            background-size: cover;
            background-attachment: scroll;
            background-color: #000000;
            color: white;
            min-height: 100vh; /* Garantir que o corpo ocupe toda a altura da tela */
        }
        .side_bar {
            height: 100vh; /* Garantir que a barra lateral ocupe toda a altura da tela */
        }
        .content {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row menu">
            <div class="col">
                <!-- <img src="<?php echo BASE_URL; ?>/assets/images/menu.png" width="32" height="32"> -->
            </div>
        </div>
        <!----Content e SideBar---->
        <div class="row">
            <div class="col-2 side_bar">
                <img src="<?php echo BASE_URL; ?>/assets/images/icon-perfil.png" class="img-fluid float-center img_logo">
                <!---Menu vertical-->
                <div class="menu_vertical">
                    <ul>
                        <li><a href="<?php echo BASE_URL; ?>/dashboard">Estoque</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/products">Produtos</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/supplier">Fornecedores</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/entry">Entradas</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/exit">Saídas</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/stock">Cadastrar Estoque</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-10 content">
                <?php $this->load_view_in_templete($view_name, $view_data); ?>
            </div>
        </div>
        <div class="row footer justify-content-center">
            <div class="col-3 text-center">
                Projeto Integrador - Univesp &copy; 2024
            </div>
        </div>
    </div>
    <script type="text/javascript"> var BASE_URL = '<?php echo BASE_URL; ?>'; </script>
    <!---JS Bootstrap --->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/bootstrap.bundle.min.js"></script>
    <!--- JS -->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
</body>
</html>
