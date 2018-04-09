
<html>
    <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Pagina de Login</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
            <script src="main.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="<?= base_url("/css/bootstrap.css")?>"/>
        </head>
    <body>
        <?php
            echo form_open("login/autenticar");
                echo form_label("E-mail","email");
                echo form_input(array("name"=>"email","id"=>"email","class"=>"form-group","maxlength"=>"200"));
                echo form_button(array("class"=>"btn btn-sucess","content"=>"Entrar"));
            echo form_close();
        ?>    
    </body>
</html>