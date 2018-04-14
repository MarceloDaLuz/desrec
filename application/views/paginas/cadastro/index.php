<!-- PAGINA PARA CADASTROS DE NOVOS USUARIO-->
<html>
<head>
    <title>Destino Reciclável - Cadastro</title>
</head>
    <body>
        <div class="dr-body">
            <div class="container">
                <h1 class="dr-title-h1">Cadastro</h1>
            <div class="dr-form-body">
                <?php
                    echo form_open("usuario/novo");
                        echo form_label("Nome","nome");
                        echo form_input(array(
                            "name"=>"nome",
                            "id"=>"nome",
                            "class"=>"form-control",
                            "maxlenght"=>"200"
                        ));
                        echo "<br>";
                        echo form_label("E-mail","email");
                        echo form_input(array(
                            "name"=>"email",
                            "id"=>"email",
                            "class"=>"form-control",
                            "maxlength"=>"200"
                        ));
                        echo "<br>";
                        echo form_label("Senha","senha");
                        echo form_password(array(
                            "name"=>"senha",
                            "id"=>"senha",
                            "class"=>"form-control",
                            "maxlength"=>"15"
                        ));
                        echo "<br>";                        
                        echo form_label("Endereço","endereco");
                        echo form_input(array(
                            "name"=>"endereco",
                            "id"=>"endereco",
                            "class"=>"form-control",
                            "maxlength"=>"245"
                        ));
                        echo "<br>";
                        echo form_label("CPF","cpf");
                        echo form_input(array(
                            "name"=>"cpf",
                            "id"=>"cpf",
                            "class"=>"form-control",
                            "maxlength"=>"11"
                        ));
                        echo "<br>";
                        echo form_button(array(
                            "class"=>"btn btn-primary",
                            "content"=>"Cadastrar",
                            "type"=>"submit"
                        ));
                    echo form_close();
                ?>
            <div> 
        </div>
        </div>
        
        
        
    </body>
</html>