<!DOCTYPE html>
<html>
<head>
    <title>Destino Reciclavel</title>
</head>
<body>
<div class="dr-body">
    <div class="container">
        <div class="dr-obj-form">
            <div class="dr-obj-f-header">
                <h1 class="dr-title-h1"><?=$objeto["NOME"];?></h1>
                <p class="dr-obj-p"><em>Dono:<?=$objeto["usuario_id"]?></em></p>
            </div>
            <div class="dr-obj-f-content titillium-web-font">
                <p>Descrição: <?=$objeto["DESCRICAO"]?></p>
                <p>Valor: <?=$objeto["VALOR"]?></p>
            </div>
            <div class="dr-obj-f-footer">
                <?=anchor("Objeto/coletar/{$objeto['ID']}",'Coletar',array("class"=>"btn btn-success"))?>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>