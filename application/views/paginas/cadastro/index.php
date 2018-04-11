<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/favicon_desrec.png" />
    <title>Destino Reciclável</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./css/dr-style.css">

    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800|Fira+Sans+Condensed|Hammersmith+One|Oswald|PT+Sans|Titillium+Web|Ubuntu"
        rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c"
        crossorigin="anonymous"></script>
</head>
    <body>
        <div class="container">
            <h1 style="text-align:center">Cadastro:</h1>
            <?php
                echo form_open("usuario/novo");
                    echo form_label("Nome","nome");
                    echo form_input(array(
                        "name"=>"nome",
                        "id"=>"nome",
                        "class"=>"form-control",
                        "maxlenght"=>"200"
                    ));

                    echo form_label("E-mail","email");
                    echo form_input(array(
                        "name"=>"email",
                        "id"=>"email",
                        "class"=>"form-control",
                        "maxlength"=>"200"
                    ));

                    echo form_label("Senha","senha");
                    echo form_password(array(
                        "name"=>"senha",
                        "id"=>"senha",
                        "class"=>"form-control",
                        "maxlength"=>"15"
                    ));

                    echo form_label("endereço","endereco");
                    echo form_input(array(
                        "name"=>"endereco",
                        "id"=>"endereco",
                        "class"=>"form-control",
                        "maxlength"=>"245"
                    ));

                    echo form_label("CPF","cpf");
                    echo form_input(array(
                        "name"=>"cpf",
                        "id"=>"cpf",
                        "class"=>"form-control",
                        "maxlength"=>"11"
                    ));

                    echo form_button(array(
                        "class"=>"btn btn-primary",
                        "content"=>"Cadastrar",
                        "type"=>"submit"
                    ));
                echo form_close();
            ?>
        </div>
        
        
    </body>
</html>