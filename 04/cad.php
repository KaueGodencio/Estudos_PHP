<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>

        <?php
        $nome = $_GET["nome"] ?? "Sem nome";  //Operador "??" null coalecente so existe apartir da versão 7 do php 
        $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
        echo "<p>É um prazer te conhecer, <b> $nome $sobrenome</b>! Este é meu site!  ";
        ?>
        <div>

            <a href="javascript:history.go(-1)"> Voltar</a>
        </div>



    </main>
</body>

</html>