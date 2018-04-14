<?php
    if(!$this->session->userdata("usuario_logado")){
        redirect('/');
    }
?>
<html>
<head>
    <title>Destino Reciclável - Perfil</title>
</head>
<body>
<div class="dr-body">          
        <div class="container">
        <!-- deve exibir nome do usuario e os produtos vinculados a ele-->
            <?php 
            if($this->session->flashdata("status-success"))
            {
                ?><p class="alert alert-success"><?=$this->session->flashdata('status-success')?></p>
            <?php
            }
            ?>
            <div class="dr-profile-form">
                <div class="dr-profile-header">
                    <p class="dr-profile-title">
                        <svg class="dr-profile-icon" viewBox="0 0 24 24">
                            <path fill="#000000" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,8.39C13.57,9.4 15.42,10 17.42,10C18.2,10 18.95,9.91 19.67,9.74C19.88,10.45 20,11.21 20,12C20,16.41 16.41,20 12,20C9,20 6.39,18.34 5,15.89L6.75,14V13A1.25,1.25 0 0,1 8,11.75A1.25,1.25 0 0,1 9.25,13V14H12M16,11.75A1.25,1.25 0 0,0 14.75,13A1.25,1.25 0 0,0 16,14.25A1.25,1.25 0 0,0 17.25,13A1.25,1.25 0 0,0 16,11.75Z" />
                        </svg>
                        Perfil
                    </p>
                
                <!-- 
                    ++++++++ Exibir: 
                    -nome
                    -array de materiais vinculados a este usuario
                    -
                -->
                </div>
                <div class="dr-profile-body">
                    <div class="dr-profile-field">
                        <p class="dr-profile-content">
                            <em>Nome:</em> <?=$usuario["NOME"]?>
                            <br>
                            <em>Endereço:</em> <?=$usuario["ENDERECO"]?>
                            <br>
                            <em>E-mail:</em> <?= $usuario["EMAIL"]?>
                            <br>
                            <em>CPF:</em> <?= $usuario["CPF"]?>
                        </p>
                        
                    </div>
                </div>                
            </div>
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
        
<div>
    
    
</body>
</html>