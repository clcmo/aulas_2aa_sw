
<?php
    // Aviso: essa parte precisou ser chamada para montarmos a página no Github pages.
    require __DIR__ . '/../vendor/autoload.php';
    
    $titPag = "Inicio";
    $utf = "UTF-8";
    $lang = "pt-br";
    $relStyle = "stylesheet";
    $linkCss = "/assets/style.css";

    $content = "
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Início</title>
            <link rel='icon' type='image/x-icon' href='../public/assets/images/favicon.ico'>
            <style>
                @import url(https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i);

                *,
                body {
                    background-color: #010;
                    font-family: 'Muli light', sans-serif;
                    background-image: url(https://cdn.pixabay.com/photo/2025/02/03/13/53/coffee-9379521_1280.png)
                }

                h1,
                p {
                    text-align: center;
                    color: #f1f1f1;
                }

                h1 {
                    padding-top: 20%
                }

                hr {
                    border: shade #E3E3E3;
                    border-width: 1px 0 0;
                    clear: both;
                    /*margin: 11px 0 30px; */
                    height: 0;
                    width: 40%;
                    position: center;
                }
            </style>
        </head>
        <body>
            <h1>Olá</h1>
            <p>Este é um exemplo de página com PHP.</p>
            <hr/>
            <p>2025. Camila L. Oliveira. Todos os direitos reservados.</p>
        </body>";

    // Salvar o conteúdo em um arquivo HTML
    file_put_contents(__DIR__ . '/../public/index.html', $content);

    echo "Página compilada com sucesso!\n";
?>