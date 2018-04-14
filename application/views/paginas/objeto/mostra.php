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
            </div>
            <div class="dr-obj-f-content titillium-web-font">
                <p><?=$objeto["DESCRICAO"]?></p>
            </div>
            <div class="dr-obj-f-footer">
                <?=anchor('Objeto/coletar','Coletar',array("class"=>"btn btn-success dr-obj-btn"))?>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>