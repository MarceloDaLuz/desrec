<!-- 
    ++PAGINAS PARA EXIBIR OS OBJETOS
    ++SE O USUARIO ESTIVER LOGADO DEVE TER OPÇÃO DE COLETA!!!!!!!!!!!
    ++QUALQUER USUARIO PODE VER OS PRODUTOS!!!!!!!
    ++SE NÃO LOGADO, DEVE-SE OFERTAR OPÇÕES DE LOGIN OU CADASTRO!!!! 

    +++> USAR OS CARDS


-->

<html>

<head>
    <title>Destino Reciclável - Pagina inicial</title>
</head>

<body>
    <div class="dr-body">
        <div class="container">
            <!-- fazer um foreach -->
            <?php if($this->session->userdata("usuario_logado")):?>
                    <?php if($meus_objetos!=null):?>
                        <div class="dr-obj">
                            <h1 class="dr-title-h1">Seus objetos:</h1>
                            <?php foreach($meus_objetos as $mo):?>
                                <?php if($mo["ESTADO"]<>0):?>    
                                    <div class="card dr-card">
                                        <div class="card-body">
                                            <!-- nome do objeto -->
                                            <h5 class="card-title dr-card-title"><?=$mo["NOME"]?></h5>
                                            <hr>
                                                <!-- nome do dono vinculado ao objeto -->
                                                <h6 class="card-subtitle mb-2 text-muted dr-card-author"><i><?=$usuario["NOME"]?></i></h6>
                                                    <!-- descricao do objeto -->
                                                    <p class="card-text dr-content-card"><?=character_limiter($mo["DESCRICAO"],10)?></p>    
                                                        <!-- link para pagina detalhada do produto -->
                                                        
                                                        <?=anchor("Objeto/mostrar/{$mo['ID']}",'Acessar',array('class'=>'btn btn-link card-link dr-btn-card'))?>
                                        </div>
                                    </div>
                                    
                                <?php endif?>
                            <?php endforeach?>
                        </div>
                    <?php else:?>
                        <div style="margin-top:1rem" class="alert alert-danger">Você não possui nenhum objeto cadastrado.</div>
                    <?php endif?>
                
                <br>

                <div class="dr-obj-catalog">
                    <h1 class="dr-title-h1">Outros objetos:</h1>
                    <?php foreach($objetos as $o):?>
                        <?php if($o["usuario_id"]<>$usuario["ID"] && $o["ESTADO"]<>0):?>
                            <div class="card dr-card">
                                <div class="card-body">
                                    <!-- nome do objeto -->
                                    <h5 class="card-title dr-card-title"><?=$o["NOME"]?></h5>
                                    <hr>
                                        <!-- nome do dono vinculado ao objeto -->
                                        
                                        <h6 class="card-subtitle mb-2 text-muted dr-card-author"><i><?=$o["usuario_id"]?></i></h6>
                                            <!-- descricao do objeto -->
                                            <p class="card-text dr-content-card"><?=character_limiter($o["DESCRICAO"],10)?></p>    
                                                <!-- link para pagina detalhada do produto -->
                                                
                                                <?=anchor("Objeto/mostrar/{$o['ID']}",'Acessar',array('class'=>'btn btn-link card-link dr-btn-card'))?>
                                </div>
                            </div>
                        <?php endif?>
                    <?php endforeach?>
                </div>
            <?php else:?>
                <div class="dr-obj-catalog">
                    <h1 class="dr-title-h1">Objetos:</h1>
                    <hr>
                    <?php foreach($objetos as $o):?>
                        <?php if($o["usuario_id"]<>$usuario["ID"] && $o["ESTADO"]<>0):?>
                            <div class="card dr-card">
                                <div class="card-body">
                                    <!-- nome do objeto -->
                                    <h5 class="card-title dr-card-title"><?=$o["NOME"]?></h5>
                                    <hr>
                                        <!-- nome do dono vinculado ao objeto -->
                                        
                                        <h6 class="card-subtitle mb-2 text-muted dr-card-author"><i><?=$o["usuario_id"]?></i></h6>
                                            <!-- descricao do objeto -->
                                            <p class="card-text dr-content-card"><?=character_limiter($o["DESCRICAO"],10)?></p>    
                                                <!-- link para pagina detalhada do produto -->
                                                
                                                <?=anchor("Objeto/mostrar/{$o['ID']}",'Acessar',array('class'=>'btn btn-link card-link dr-btn-card'))?>
                                </div>
                            </div>
                        <?php endif?>
                    <?php endforeach?>
                </div>
            <?php endif?>
            <footer>
                <div class="row">
                    <div class="col green-box"></div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>