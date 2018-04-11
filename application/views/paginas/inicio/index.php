<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?=base_url("./img/favicon_desrec.png")?>" />
    <title>Destino Reciclável - Pagina inicial</title>
    
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
                
            <?php endif?>
        </header>
        <div class="container">
            <div class="jumbotron main-content">
                <h1 class="display-4">Bem vindo!</h1>
                <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum congue dolor vitae eleifend. Duis finibus, nisl a lobortis sodales, nisi justo cursus magna, et efficitur risus justo eget eros. Etiam convallis leo orci, in rutrum justo accumsan sed. Maecenas nulla justo, rhoncus et felis vitae, mattis pulvinar neque. Maecenas aliquet tellus ut ipsum laoreet volutpat. Donec aliquet est sed urna aliquam, ac gravida est fringilla. Ut commodo, metus eget tincidunt pretium, justo nulla hendrerit dui, et finibus mi diam vel turpis. Mauris vulputate nunc nec augue commodo, ut auctor ex placerat. Aliquam erat volutpat. Etiam in magna ut enim ultricies aliquam quis at libero. </p>
            
                
            </div>
            <main class="main-content">
                    <?php include("card.php");?>
                    <?php include("card.php");?>
            </main>
            <footer>
                <div class="row">
                    <div class="col green-box">
            
                    </div>
                    <div class="col">
                        <a href="#" class="link-reference">
                            <svg class="svg-icon" viewBox="0 0 24 24">
                                <path fill="#000000" d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z"
                                />
                            </svg>
                            Facebook
                        </a>
                        <a href="#" class="link-reference">
                            <svg class="svg-icon" viewBox="0 0 24 24">
                                <path fill="#000000" d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z"
                                />
                            </svg>
                            Twiiter
                        </a>
                        <a href="https://github.com/MarceloDaLuz/desrec" class="link-reference">
                            <svg class="svg-icon" viewBox="0 0 24 24">
                                <path fill="#000000" d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H14.56C14.24,20.93 14.23,20.32 14.23,20.11L14.24,17.64C14.24,16.8 13.95,16.25 13.63,15.97C15.64,15.75 17.74,15 17.74,11.53C17.74,10.55 17.39,9.74 16.82,9.11C16.91,8.89 17.22,7.97 16.73,6.73C16.73,6.73 15.97,6.5 14.25,7.66C13.53,7.46 12.77,7.36 12,7.35C11.24,7.36 10.46,7.46 9.75,7.66C8.03,6.5 7.27,6.73 7.27,6.73C6.78,7.97 7.09,8.89 7.18,9.11C6.61,9.74 6.26,10.55 6.26,11.53C6.26,15 8.36,15.75 10.36,16C10.1,16.2 9.87,16.6 9.79,17.18C9.27,17.41 7.97,17.81 7.17,16.43C7.17,16.43 6.69,15.57 5.79,15.5C5.79,15.5 4.91,15.5 5.73,16.05C5.73,16.05 6.32,16.33 6.73,17.37C6.73,17.37 7.25,19.12 9.76,18.58L9.77,20.11C9.77,20.32 9.75,20.93 9.43,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3Z"
                                />
                            </svg>
                            Github
                        </a>
                    </div>
                </div>
            
            </footer>
        </div>
        
    </div>

    <!-- <script>
        $('.carousel').carousel()
    </script> -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>