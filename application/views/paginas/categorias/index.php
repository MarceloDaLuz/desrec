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
            <h1 style="text-align:center">Categorias:</h1>

            <table class="table table-dark">
                <?php foreach ($categorias as $c) :?>
                <tr>
                    <td><?=$c["nome"]?></td>
                </tr>
                <?php endforeach?>
            </table>
        </div>
        
        
    </body>
</html>