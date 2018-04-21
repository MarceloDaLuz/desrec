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
                if($this->session->flashdata("no_categorias")){
                    echo "<p class='alert alert-danger'>";
                    
                    $this->session->flashdata('no_categorias');
                    
                    echo"</p>";
                }
            ?>
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
                    echo form_textarea(array(
                    "name" => "descricao",
                    "class" => "form-control",
                    "id" => "descricao",
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
                    echo form_dropdown('categoria', $categorias,'1');
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>