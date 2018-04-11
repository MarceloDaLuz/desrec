<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/favicon_desrec.png" />
    <title>Destino Reciclável</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./css/dr-style.css">

    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800|Fira+Sans+Condensed|Hammersmith+One|Oswald|PT+Sans|Titillium+Web|Ubuntu"
        rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c"
        crossorigin="anonymous"></script>
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