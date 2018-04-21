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
                        <span class="navbar-toggler-icon">
                            
                        </span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
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
                <nav class="navbar navbar-expand-lg navbar-color-logged pt-sans-font">
                    <a href="<?= base_url('/')?>" class="navbar-brand brand-title">
                        <!-- Brand-->
                        <img src="<?=base_url("./img/recycle.svg")?>" width="48px" height="48px"> Destino Reciclável
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
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
                            
                            <li class="nav-item">
                                <?=anchor('Perfil/autenticado','Meu Perfil',array('class'=>'btn btn-primary'))?>
                            </li>
                            <li class="nav-item">
                                <?=anchor('Objeto/cadastro','Cadastre um objeto',array("class"=>"btn btn-primary"))?>
                            </li>
                            <li class="nav-item">
                                <?=anchor('Perfil/deslogar','Deslogar',array('class'=>'btn btn-danger'))?>
                            </li>
                            

                        </ul>

                    </div>
                </nav>
                
            <?php endif?>
        </header>