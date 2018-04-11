<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?=base_url("./img/favicon_desrec.png")?>" />
    <title>Destino Reciclável - Perfil</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url("./css/dr-style.css")?>">

    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800|Fira+Sans+Condensed|Hammersmith+One|Oswald|PT+Sans|Titillium+Web|Ubuntu"
        rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c"
        crossorigin="anonymous"></script>
</head>
<body>
<div class="dr-body">

    
        <header>
            <!--
                <div>
                    flexbox que vai ser usada para logo, caso não fique bom será usado brand
                </div>
            -->
            <nav class="navbar navbar-expand-lg navbar-default-setting pt-sans-font">
                <a href="<?= base_url('/')?>" class="navbar-brand brand-title">
                    <!-- Brand-->
                    <img src="./img/recycle.svg" width="48px" height="48px"> Destino Reciclável
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <!-- Abas-->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/')?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('index.php/categorias')?>">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Descarte</a>
                        </li>
                    </ul>
                    <form class=" navbar form-inline my-2 my-lg-0">
                        <!-- Barra de pesquisa-->
                        <div class="input-group mr-sm-2">
                            <input class="form-control" type="search" placeholder="Encontre um produto!" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
                            </div>
                        </div>

                    </form>
                    <ul class="navbar-nav">
                        <!-- precisa-se de um padding-->
                        <!-- verificar se o usuario esta logado, caso esteja, esconder o botão de cadastre-se -->
                        <!--
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href="#">Cadastre-se</a>
                        </li>
                        -->
                        <li class="nav-item">
                            <?=anchor('Perfil/deslogar','Deslogar','btn btn-danger')?>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
    
        <?php 
        if($this->session->userdata("usuario_logado"))
        {
            ?><p><?=$this->session->flashdata("status-success")?></p>
        <?php
        }
        else
        {
            ?><p> <?=$this->session->flashdata("status-failed")?></p>
        <?php
        }
        ?>
    <div>
    
    
</body>
</html>