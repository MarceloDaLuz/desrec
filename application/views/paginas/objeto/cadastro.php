<!-- ESTA PAGINA NÃO PODE SER ACESSADA SEM QUE O USUARIO ESTEJA LOGADO -->
<?php
    if(!$this->session->userdata("usuario_logado")){
        redirect('/');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Destino Reciclavel - Cadastro de objeto</title>
</head>
<body>
    <div class="dr-body">
        <div class="container">
            <div class="dr-form-body">
            <!-- formulario para cadastro de produto-->
            <!-- na variavel ESTADO assim que criado inserir como "disponivel"-->
            <!-- na variavel DATAPOST inserir com NOW()-->
            <!-- na variavel usuario_id pegar o usuario logado-->
                <?php
                    echo form_open('Objeto/novo');
                    
                    echo form_label('Nome','nome');
                    echo form_input(array(
                        "name" => "nome",
                        "class"=>"form-control",
                        "maxlength"=> "200",
                        "id" => "nome"
                    ));
                    echo "<br>";
                    echo form_label("Descrição","descricao");
                    echo form_input(array(
                        "name" => "descricao",
                        "class"=>"form-control",
                        "maxlength"=> "200",
                        "id"=>"descricao"
                    ));
                    echo "<br>";
                    echo form_label("Valor","valor");
                    echo form_input(array(
                        "name"=>"valor",
                        "class"=>"form-control",
                        "type"=>"number",
                        "id"=>"valor"
                    ));
                    echo "<br>";
                    echo form_button(array(
                        "class" => "btn btn-success",
                        "content" => "Publicar",
                        "type"=>"submit"
                    ));
                    echo form_close();
                ?>
            </div>
        </div>
    </div>
</body>
</html>