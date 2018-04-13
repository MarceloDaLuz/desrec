
<html>
<head>
    <title>Destino Reciclável - Bem vindo!</title>
</head>
<body>
<div class="dr-body">
    <header>
                <!--
                    <div>
                        flexbox que vai ser usada para logo, caso não fique bom será usado brand
                    </div>
                -->
                <?php if(!$this->session->userdata("usuario_logado")):?>
                    <nav class="navbar navbar-expand-lg navbar-default-setting pt-sans-font">
                        <a href="<?= base_url('/')?>" class="navbar-brand brand-title">
                            <!-- Brand-->
                            <img src="<?=base_url("./img/recycle.svg")?>" width="48px" height="48px"> Destino Reciclável
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
                                    <a class="nav-link" href="<?=base_url('index.php/descarte')?>">Descarte</a>
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
                                    <a class="nav-link btn btn-success" href="<?=base_url('index.php/login')?>">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-success" href="<?= base_url('index.php/cadastro')?>">Cadastrar-se</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                <?php else:?>
                    <nav class="navbar navbar-expand-lg navbar-default-setting pt-sans-font">
                        <a href="<?= base_url('/')?>" class="navbar-brand brand-title">
                            <!-- Brand-->
                            <img src="<?=base_url("./img/recycle.svg")?>" width="48px" height="48px"> Destino Reciclável
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
                                    <a class="nav-link" href="<?=base_url('index.php/descarte')?>">Descarte</a>
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
                    
                <?php endif?>
    </header>
    <div class="container">
        <h1 class="dr-title-h1">Bem-vindo</h1>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>