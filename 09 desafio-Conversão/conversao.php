<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>


    <body>
        <main>
            <h1>Conversor de Moedas</h1>
            <?php
            //Cotação com base no google
            $cotação = 5.70;
            //Quantidade R$ que voce possui
            /* $real = 1000; */

            $real = $_GET["din"];

            $dolar = $real / $cotação;

            //Mostrar o Resultado

            echo "<p> O valor de R$ "  .  "<b>" . number_format($real, 2, ",", ".") . "</b>" . " convertidos em dólar é U$ " . "<b>" . number_format($dolar, 2, ",", ".") . "</b>";

            //Formatação de moedas com Internacionalização!
            //Biblioteca intl (Internallization PHP)

            /*  $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus" . numfmt_format_currency($padrão, $real, "BRL") . "equivalem a " . numfmt_create("pt_BR", NumberFormatter::CURRENCY); */
            ?>
            <div>
                <button> <a href="javascript:history.go(-1)" style="color:white;"> Voltar</a></button>
            </div>
        </main>
    </body>



</body>

</html>