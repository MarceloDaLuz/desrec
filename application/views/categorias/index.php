<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pagina de Categorias</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <table>
            <h1>Categorias:</h1>
        <?php foreach($dados as $categoria):?>
            <tr>
                <td><?=$categoria["nome"]?></td>
            </tr>
        <?php endforeach?>
        </table>
    </body>
</html>