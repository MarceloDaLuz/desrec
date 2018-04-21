<!DOCTYPE html>
<html>
<head>
    <title>Destino Reciclavel</title>
</head>
<body>
<div class="dr-body">
    <div class="container">
        <div class="dr-obj-form">
            <?php 
                $usuario =$this->session->userdata("usuario_logado");
                if( $usuario["ID"] == $objeto["usuario_id"]):
            ?>

                <div class="dr-obj-f-header">
                    <h1 class="dr-title-h1"><?=$objeto["NOME"];?></h1>
                </div>
                <div class="dr-obj-f-content titillium-web-font">
                    <p>Descrição: <?=$objeto["DESCRICAO"]?></p>
                    <p>Valor: <?=$objeto["VALOR"]?></p>
                    <?php 
                        foreach ($categoria as $c) {
                            if($c["id"]==$objeto["categorias_id"]){
                                ?> <p>Categoria: <?=$c["nome"]?></p><?php
                            }
                        }
                    ?>
                </div>
                <?php else:?>
                    <?php if($this->session->userdata("usuario_logado")):?>
                        <div class="dr-obj-f-header">
                            <h1 class="dr-title-h1"><?=$objeto["NOME"];?></h1>
                             <p class="dr-obj-p"><em>Dono:<?=$objeto["usuario_id"]?></em></p>
                        </div>
                        <div class="dr-obj-f-content titillium-web-font">
                            <p>Descrição: <?=$objeto["DESCRICAO"]?></p>
                            <p>Valor: <?=$objeto["VALOR"]?></p>
                            <?php 
                                foreach ($categoria as $c) {
                                    if($c["id"]==$objeto["categorias_id"]){
                                        ?> <p>Categoria: <?=$c["nome"]?></p><?php
                                    }
                                }
                            ?>
                        </div>
                        <div class="dr-obj-f-footer">
                            <?=anchor("Objeto/coletar/{$objeto['ID']}",'Coletar',array("class"=>"btn btn-success"))?>
                        </div>
                    <?php else:?>
                        <div class="dr-obj-f-header">
                            <h1 class="dr-title-h1"><?=$objeto["NOME"];?></h1>
                            <p class="dr-obj-p"><em>Dono:<?=$objeto["usuario_id"]?></em></p>
                        </div>
                        <div class="dr-obj-f-content titillium-web-font">
                            <p>Descrição: <?=$objeto["DESCRICAO"]?></p>
                            <p>Valor: <?=$objeto["VALOR"]?></p>
                            <?php 
                                foreach ($categoria as $c) {
                                    if($c["id"]==$objeto["categorias_id"]){
                                        ?> <p>Categoria: <?=$c["nome"]?></p><?php
                                    }
                                }
                            ?>
                        </div>
                        <div class="dr-obj-f-footer">
                            <?=anchor("Perfil/autenticado",'Cadastre-se ou logue para coletar',array("class"=>"btn btn-success"))?>
                        </div>
                    <?php endif?>
                <?php endif?>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>