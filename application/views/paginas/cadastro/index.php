<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pagina de Categorias</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?= base_url("/css/bootstrap.css")?>"/>
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